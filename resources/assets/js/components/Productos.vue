<template>
  <v-app>
    <template>
      <v-row>
        <v-col>
          <v-sheet
    class="mx-auto"
    elevation="8"
    max-width="1000"
  >
    <v-slide-group
      v-model="model"
      class="pa-4"
      center-active
      show-arrows
    >
      <v-slide-item
        v-for="foto in splitedFotos"
        :key="foto.id"
        
        
      >
      <v-hover
        v-slot:default="{ hover }"
        close-delay="200"
      >
        <v-card
          class="ma-4"
          height="200"
          width="150"
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-scale-transition>
              <v-img
              :src="'/storage/'+foto.portada"
              height="200px"
              @click="openfotoDialog(foto)"
              >
              <v-expand-transition>
                <div
                  v-if="hover"
                  class="d-flex transition-fast-in-fast-out blue darken-2 v-card--reveal display-3 white--text"
                  style="height: 100%;"
                  
                >
                 <span style=" display: flex;
                              flex: 1;
                              justify-content: space-around;"><v-icon 
                 
                 style="color: white;"

                 >
                 add_circle
                 </v-icon></span> 
                </div>
              </v-expand-transition>
              </v-img>
              
            </v-scale-transition>
            
            
          </v-row>
        </v-card>
      </v-hover>
      </v-slide-item>
    </v-slide-group>
      <nav>
              <ul class="pagination">
                <li v-if="pagination.current_page > 1">
                  <a href="#" @click.prevent="changePage(pagination.current_page - 1)"><span>atras</span></a>
                </li>

                <li 
                v-for="(page, key) in pagesNumber"
                :key="key" 
                v-bind:class="[ page == isActived ? 'active' : '']"
                >
                  <a href="#" @click.prevent="changePage(page)">
                    {{ page }}
                    </a>
                </li>

                <li v-if="pagination.current_page < pagination.last_page">
                  <a href="#" @click.prevent="changePage(pagination.current_page + 1)"><span>siguiente</span></a>
                </li>
              </ul>
            </nav>
  </v-sheet>
  <!-- Modal mostrar detalles -->
      <div id=""  v-if="selectedFoto" >
          <v-dialog   
          v-model="dialog"
          width="600"
          
          >
            <v-card> 
              <v-container>
                <v-card-title>
               <h3> Producto: {{ selectedFoto.name }} </h3>                  
              
                </v-card-title>
                <hr>
                <v-card-text> 
              <h3>Detalle: {{ selectedFoto.descripcion }} </h3>
              <br>
               <v-carousel>
                <v-carousel-item
                  v-for="fotito in selectedFoto.images"
                  :key="fotito"
                  
                  reverse-transition="fade-transition"
                  transition="fade-transition"
                  
                >
                <v-img
                :src="'/storage/'+fotito"
                ></v-img>
                </v-carousel-item>
              </v-carousel>    
              
              <hr>
              <br>
               
              </v-card-text>
              </v-container>
             
            </v-card>
          </v-dialog>
        
      </div>
    <!-- FIN Modal mostrar detalles -->
    <br><br>
        <v-alert
      outlined
      type="warning"
      prominent
      border="left"
    >
      Contáctanos es nuestras redes sociales para comprar nuestro productos.
    </v-alert>
        
        </v-col>
        
      </v-row>
  
           
  </template>
  </v-app>
</template>


<script>
  export default {
    data: () => ({
    pagination: {
      'total':0,
      'current_page':0,
      'per_page':0,
      'last_page':0,
      'from':0,
      'to':0
    },
    fotos: [],
    imagenes: [],
    model: null,
    offset: 2,
    dialog: false,
    selectedFoto: undefined
    }),
    
    mounted () {
      
    },
    created () {
      this.getProducts();
      console.log(this.getProducts());
      
    },
    computed:{
      splitedFotos: function(){
        let newArr = [...this.fotos]
        newArr.map(el => {
          return el.images = el.images.split(',')
        })
        return newArr
      },
      isActived: function(){
        return this.pagination.current_page;
      },
      pagesNumber: function(){
        if(!this.pagination.to){
          return [];
        }
        var from = this.pagination.current_page - this.offset;
        if(from < 1){
          from = 1;
        }

        var to = from + (this.offset * 2);
        if(to >= this.pagination.last_page){
          to = this.pagination.last_page;
        }

        var pagesArray = [];
        while(from <= to){
          pagesArray.push(from);
          from++;
        }
        return pagesArray;
      }
    },
    methods: {
    async getProducts(page){
        try {
          await axios.get('/productos?page='+page)
          .then(res => {
            this.fotos = res.data.fotos.data,
            this.pagination = res.data.pagination,
            this.imagenes = res.data.fotos_producto
            

          })
        } catch (e) {
            console.log(e);
        }
      },
      changePage: function(page){
      this.pagination.current_page = page;
      this.getProducts(page);
    },
      openfotoDialog(foto){
        this.selectedFoto = foto;
        this.dialog = true;
    },
    
 
    }

    

  }
</script>
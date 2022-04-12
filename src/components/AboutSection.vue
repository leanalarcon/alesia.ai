<template>
  <section id="about">
    <v-container fluid>
      <v-row align="center" justify="center">
            <v-col cols="12">
             
              <v-row class="m-5" align="center" justify="center">
                <v-col cols="12" md="3" class="mt-5">
                  <h2 class="font-weight-light mb-5" style="color: white">AppDynamics Business Observability Platform</h2>
                   <p style="font-size:1rem; color: white">Prioritize what's most important to your business and your people so you can see, share and take action in real time. Turn performance into profit with a deeper underestanding of user and application behaviour.</p>
                    <!-- <v-btn depressed color="#00fc6b"> See More </v-btn> -->
                </v-col>
                <v-col  md="1"></v-col>
                <v-col cols="12" md="4" class="mt-5">
                  <v-img src="@/assets/img/Illustration_02.png"/>
                </v-col>
              </v-row>
              <v-row class="m-5" align="center" justify="center">
                   <v-col cols="12"  md="4" class="m-5">
                      <v-img src="@/assets/img/Illustration_04.png"/>
                </v-col>
                 <v-col  md="1"></v-col>
                  <v-col cols="12" md="3" class="mt-5 mb-5">
                   <h2 class="font-weight-light mb-5" style="color: white">
                     Harness Software Business Delivery Platform
                   </h2>
                   <p style="font-size:1rem; color: white">Harness is the industry's first Software Delivery Platform to use AI to simplify your DevOps processes - CI, CD, Fature Flags, Cloud Costs and much more.<br> Loved by Developers, Trusted by Businesses. </p>
                   <!-- <v-btn depressed color="#00fc6b"> See More </v-btn> -->
                </v-col>
             
              </v-row>
            </v-col> 
          </v-row>
    </v-container>
      
      <v-container fluid class="white">
      <v-row align="center" justify="center">
        <v-col cols="10">
        
            <h2 class="text-center pt-6 font-weight-light ">Our Partnerships</h2>
            
            <v-container>
                  <v-sheet class="mx-auto" elevation="0" width="92%" outlined color="white">
                    <v-slide-group v-model="model" class="pa-4" show-arrows>
                      <v-slide-item v-for="(item,i) in items" :key="i">
                        <v-card class="ma-4" height="100" width="200" outlined color="white">
                          <v-row class="fill-height" align="center" justify="center">
                            <v-scale-transition>
                              <v-icon v-if="active" color="white" size="48" v-text="'mdi-close-circle-outline'">
                              </v-icon>
                              <v-img height="100%" width="100%" contain :src="item.src"></v-img>
                            </v-scale-transition>
                          </v-row>
                        </v-card>
                      </v-slide-item>
                    </v-slide-group>
              </v-sheet>
            </v-container>

        </v-col>
      </v-row>
    </v-container>
  </section>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            src: require('@/assets/img/partner1.jpg'),
          },
          {
            src: require('@/assets/img/partner2.jpg'),
          },
          {
            src: require('@/assets/img/partner3.jpg'),
          },
          {
            src: require('@/assets/img/partner4.jpg'),
          },
          {
            src: require('@/assets/img/partner5.jpg'),
          },
          {
            src: require('@/assets/img/partner6.jpg'),
          },
          {
            src: require('@/assets/img/partner7.jpg'),
          },
          {
            src: require('@/assets/img/partner8.jpg'),
          },
        ],
      }
    },
    
  }
</script>

<style scoped>
#about {
  background-color: #521d92;
}
</style>

<template>
  <section id="solutions" class=" blue darken-1 white--text ">
      <div class="text-center mt-8">
         <h2 class="font-weight-light pt-10">Observability Solutions</h2>
         <br>
        <!-- <p class="text-center">From major protocols and  exchanges to banks and <br> governments, our industry leading blockchain analytics and <br> AML solutions ar trusted to best analize and manage risk.</p> -->
      </div>

      <v-row class="mt-8">
        <v-col cols="2"></v-col>
        <v-col cols="12" md="3">
             <h3 class="text-center">Coinfirm</h3>
             <p class="text-center">Blockchain Analytics & Compliance</p>
             <v-img src="@/assets/img/Coinfirm.png"/>
             <p class="text-center ">Analytics and Compliance Powering<br/>the Mass Adoption of Blockchain.</p>
        </v-col>

       <v-col cols="2"></v-col>

        <v-col cols="12" md="3">
            <h3 class="text-center">Moogsoft</h3>
             <p class="text-center">AIOps-Noise Reduction & Correlation</p>
             <v-img src="@/assets/img/Moogsoft.png"/>
             <p class="text-center">Drastically reduce alert noise and eliminate un-necessary on-call notifications.</p>
        </v-col>

          <v-col cols="2"></v-col>
      </v-row>

       <v-row class="mt-8">
        <v-col cols="2"></v-col>
        <v-col cols="12" md="3">
             <h3 class="text-center">AppViewX</h3>
             <p class="text-center">Machine Identity Automation Platform </p>
             <v-img src="@/assets/img/Appviex.png"/>
             <p class="text-center">The certificate and key lifecycle automation platform. Prevent outages and ensure constant network availability by gaining full visibility into and control over your PKI.</p>
        </v-col>

       <v-col cols="2"></v-col>
        <v-col cols="12" md="3">
           <h3 class="text-center">ThousandEyes</h3>
             <p class="text-center">Multi-Layered Visibility </p>
             <v-img src="@/assets/img/Thousand.png"/>
             <p class="text-center">Deliver better digital expiriences with<br>unrivaled Visibility into the internet, the cloud<br>and the networks your business runs on. </p>
        </v-col>
          <v-col cols="2"></v-col>
      </v-row>

      <v-container fluid class="white">
      <v-row align="center" justify="center">
        <v-col cols="10">
        
            <h2 class="text-center pt-6 font-weight-light black--text ">Trusted by leading brands worldwide</h2>

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
            
            <!-- <p class="text-center black--text" style="font-size:0.7rem;">See our latest clients</p> -->
       
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
            src: require('@/assets/img/Directv.png'),
          },
          {
            src: require('@/assets/img/Client_01.jpg'),
          },
          {
            src: require('@/assets/img/Client_02.jpg'),
          },
          {
            src: require('@/assets/img/Client_03.jpg'),
          },
          {
            src: require('@/assets/img/Client_04.jpg'),
          },
          {
            src: require('@/assets/img/Client_05.jpg'),
          },
          {
            src: require('@/assets/img/Client_06.png'),
          },
          {
            src: require('@/assets/img/Client_07.jpg'),
          },
        ],
      }
    },
    
  }
</script>


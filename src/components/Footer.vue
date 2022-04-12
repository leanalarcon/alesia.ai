<template>
  <v-footer padless>
    <v-card style="background-color: #171b34;" flat tile class="white--text text-center" >
      <v-row justify="center">
      <v-col cols="6" class="mt-7">

        <v-btn
          v-for="(icon, i) in icons"
          :key="i"
          class="mx-4 white--text"
          :href="icon.link"
          target="_blank"
          icon
        >
          <v-icon size="3vw">{{ icon.text }}</v-icon>
        </v-btn>
  
      </v-col>

      
      <v-col cols="6" class="mt-9 white--text">
    
        {{ new Date().getFullYear() }} — <strong>© Alesia Labs. All rights reserved.</strong>
     
      </v-col>
      </v-row>

    </v-card>
  </v-footer>
</template>

<style scoped>
.v-card {
  width: 100%;
  height: 6vw;
}
</style>

<script>
export default {
  data: () => ({
    icons: [
      {
        text: "mdi-linkedin",
        link: "https://www.linkedin.com/company/aslabs/",
      },
    ],
  }),
};
</script>



                 
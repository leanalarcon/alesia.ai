<template>
  <section id="contact">
    <v-parallax dark src="@/assets/img/Fondo_03.jpg" height="100%">
    <v-container fluid>
      <v-row align="center" justify="center"> 
        <v-col cols="6">
          <v-row justify="center">
            <v-col cols="12" sm="6">
              <h3 class="font-weight-light display-1">Contact Us!</h3>
              <p class="font-weight-light mt-3" style="font-size:0.8rem;">
                Create a "Culture of Observability" that allows understanding Patterns and Behaviors.
              </p>
             </v-col>
           </v-row>
        </v-col>
    
          <v-col cols="6">
              <v-form v-model="valid">
                <v-container>
                  <v-row>
                    <v-col cols="6">
                      <v-text-field  color="white"  v-model="name" :rules="nameRules" :counter="10" label="Name" required dark></v-text-field>
                    </v-col>

                    <v-col cols="6">
                      <v-text-field color="white" v-model="email" :rules="emailRules" label="E-mail" required dark></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-textarea  color="white"  rows="1" v-model="textArea" :rules="textAreaRules" label="Message" required dark/>
                    </v-col>

                    <v-col cols="2"></v-col>

                     <v-col cols="4">
                      <v-btn color="#00fc6b" depressed rounded block class="mt-3" @click="submit">
                        send
                      </v-btn>
                    </v-col> 

                   <v-col cols="4"> </v-col>
                  </v-row>

                </v-container>
             </v-form>
          </v-col>
      
     </v-row>
    </v-container>
  </v-parallax>
   
  </section>
</template>

<script>
  export default {
    data: () => ({
      valid: false,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => v.length <= 10 || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid',
      ],
      textArea: "",
      textAreaRules: [
      (v) => !!v || "The text field is required",
      (v) => (v && v.length >= 10) || "Minimum of 10 characters",
    ],
    }),
  }
</script>
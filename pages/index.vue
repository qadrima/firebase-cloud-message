<template>
  	<div>
  		<p>FCM Token : {{token}}</p>
  	</div>
</template>

<script>

import { getMessaging, onMessage, getToken } from 'firebase/messaging'
import { messaging } from '@/plugins/firebase'

export default {
  	name: 'IndexPage',
  	data() {
      	return {
        	token: '-'
      	}
    },
  	mounted(){
  		
  		onMessage(messaging, (payload) => {
  			console.log('Message on client: ', payload);
  		});

  		this.activate();
  	},

  	methods: {

  		async activate() {
  			const token = await getToken(messaging, {
  				vapidKey: 'BOT6kjmWGdqImZ122hJx-nrvyhH-TIG8lFaj3eh5P8N_jkMWGPZLeUGNVhcd_KgxOqAof2P4LKqYYwnTSrl8FV8'
  			});

  			if (token) {
  				console.log(token);
  				this.token = token;
  			}
  		}
  	}
}

</script>

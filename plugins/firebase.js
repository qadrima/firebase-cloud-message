import { initializeApp, getApps } from 'firebase/app'
import { getMessaging } from 'firebase/messaging'

const firebaseConfig = {
	apiKey: "AIzaSyCIQL0kv9bl_8ncbd2sQrXFeFLDFAGxc6E",
    authDomain: "qadri-mar-akbar.firebaseapp.com",
    databaseURL: "https://qadri-mar-akbar.firebaseio.com",
    projectId: "qadri-mar-akbar",
    storageBucket: "qadri-mar-akbar.appspot.com",
    messagingSenderId: "736087459750",
    appId: "1:736087459750:web:5a5491787a9997af"
};

const apps = getApps();

const app = !apps.length ? initializeApp(firebaseConfig) : apps[0];

export const messaging = getMessaging(app);
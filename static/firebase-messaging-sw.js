importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js");

const firebaseConfig = {
	apiKey: "AIzaSyCIQL0kv9bl_8ncbd2sQrXFeFLDFAGxc6E",
    authDomain: "qadri-mar-akbar.firebaseapp.com",
    databaseURL: "https://qadri-mar-akbar.firebaseio.com",
    projectId: "qadri-mar-akbar",
    storageBucket: "qadri-mar-akbar.appspot.com",
    messagingSenderId: "736087459750",
    appId: "1:736087459750:web:5a5491787a9997af"
};

firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
	console.log('Message on background: ', payload);
});
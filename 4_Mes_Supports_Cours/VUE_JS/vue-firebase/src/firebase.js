import firebase from 'firebase/app';
import "firebase/database";

const firebaseConfig = {
  apiKey: "AIzaSyAy1A1NPbMN581YrFtUgkKLr-VAVpcCZac",
  authDomain: "vuefirebase-1d3ae.firebaseapp.com",
  databaseURL: "https://vuefirebase-1d3ae-default-rtdb.firebaseio.com",
  projectId: "vuefirebase-1d3ae",
  storageBucket: "vuefirebase-1d3ae.appspot.com",
  messagingSenderId: "297209220408",
  appId: "1:297209220408:web:287e3a333e004d83fc85cd"
};

firebase.initializeApp(firebaseConfig);
export default firebase.database()
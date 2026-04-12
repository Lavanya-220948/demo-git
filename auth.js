// Firebase Configuration
const firebaseConfig = {
    apiKey: "AIzaSyABm6ILiBzmhfxhaTG4KK_t-ecCJ_UUmUc",
    authDomain: "project-2191106719420160405.firebaseapp.com",
    projectId: "project-2191106719420160405",
    storageBucket: "project-2191106719420160405.firebasestorage.app",
    messagingSenderId: "1033107859301",
    appId: "1:1033107859301:web:73ce0a494b2e47689ca38c"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
const provider = new firebase.auth.GoogleAuthProvider();

function googleLogin() {
    auth.signInWithPopup(provider).catch((error) => {
        console.error("Login Error:", error.message);
        alert("Failed to login: " + error.message);
    });
}

function googleLogout() {
    auth.signOut();
}

auth.onAuthStateChanged((user) => {
    if (user) {
        document.getElementById("userName").innerText = user.displayName || user.email;
        document.getElementById("googleLoginBtn").style.display = "none";
        document.getElementById("logoutBtn").style.display = "inline-block";
    } else {
        document.getElementById("userName").innerText = "Guest";
        document.getElementById("googleLoginBtn").style.display = "inline-block";
        document.getElementById("logoutBtn").style.display = "none";
    }
});

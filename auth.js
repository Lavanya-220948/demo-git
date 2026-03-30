// Firebase Configuration
const firebaseConfig = {
    apiKey: "AIzaSyACnL25YssweGPswuseVYoQO_gRFpfJr8k",
    authDomain: "hospital-auth-3080b.firebaseapp.com",
    projectId: "hospital-auth-3080b",
    storageBucket: "hospital-auth-3080b.firebasestorage.app",
    messagingSenderId: "998121964570",
    appId: "1:998121964570:web:572aca645b759b96b23da3"
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

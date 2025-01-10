<style>
    nav {
    display: flex;
    justify-content: center;
    background: linear-gradient(90deg, #3E5879, #A1D1E4);
    padding: 2rem 0;
    border-color: black;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 1rem;
    font-weight: bold;
    /* transition: background-color 0.3s ease, color 0.3s ease; */
    /* border-color: black; */
}

 nav a button{ 
    background-color: #3E5879;
    color: white;
    padding: 0px; 
 }


 nav a:hover {
    text-decoration: none;
    background-color: #125687; 
   
    border-radius: 5px;
}

.auth-button {
    position: absolute;
    top: 30px;
    right: 30px;
}

 .button {
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 5px;
    font-size: 0.9rem;
    font-weight: bold;
    background: transparent; 
    color: black; 
    border: 2px solid black;
    /* transition: all 0.3s ease; */
}

.button:hover {
background: rgba(0, 0, 0, 0.1); 
color: black; 
border: 2px solid  black; 
box-shadow: 0 0 10px black; 
}
.nav-button {
    display: flex;
    justify-content: center;
 }

 .nbutton {
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 5px;
    font-size: 0.9rem;
    font-weight: bold;
    background: #3E5879; 
     color:  white;  
    transform: scale(1);
 }
    


.nbutton:hover {
background: rgba(0, 0, 0, 0.1); 
color: white; 
box-shadow: 0 0 10px black; 
/* transform: scale(1.1); 
transition: transform 0.3s ease;*/
}
.nbutton.active {
    background: #125687;
    border-radius: 5px;
}
.card-selected {
    transform: scale(1.1);
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.3);
}
footer {
    position: relative; /* Makes the footer stick to the bottom */
    bottom: 0; /* Positions it at the very bottom */
    left: 0; /* Ensures it starts from the left edge */
    width: 100%; /* Makes it span the entire width */
    background: linear-gradient(90deg, #3E5879, #A1D1E4);
    color: white;
    text-align: center;
    padding: 1rem 0;
    z-index: 10; /* Ensures it stays above other content */
}
</style>



<nav>
        <div class="nav-button">
           <a href="home.html" class="nbutton">Home</a>
           <a href="about.html" class="nbutton">About</a>
           <a href="map.html" class="nbutton">Map</a>
           <a href="contribute.html" class="nbutton">Contribute</a>
           <a href="contact.html" class="nbutton">Contact</a>
        </div>
        </nav>




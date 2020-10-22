const counter = document.getElementById("counter");

console.log(counter);

const updateCounter = async () => {

  const data = await fetch('https://api.countapi.xyz/hit/monSite2-counter/visits')
   const count = await data.json()//transforme ce que me ramene l'api en objet visible par javascript
  //on change le non du namspace et la key
  //console.log(count.value)
  counter.innerHTML=count.value
  counter.style.filter='blur(0)'
};

updateCounter();
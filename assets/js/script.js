const searchInput = document.querySelector("[placeholder='Search']");
const autocomplete = document.getElementById('autocomplete');

searchInput.addEventListener(
    "keyup",
    ()=>{
        //reponse de mon keyup
        let resultat = searchInput.value;
        //console.log("le contenu de mon champ est '" + resultat + "' c'est tres joli!");
        //j'ai besoin d'appeler request.php pour obtenir mes résultats
        //AJAX
        fetch("./admin/request.php?resultat="+resultat).then((reponse)=>{
            //j'attend l'execution de ma requette
           return reponse.json();
            //console.dir(reponse);
        })
        //j'attend la reponse au format
        .then((json)=>{
            //console.dir(json);
            autoComp(json);
        })
    }
    
)
//Instant excercice!!!
//créer une fonction qui affiche mes resultat de request.php sous l'input

function autoComp(json){
    if(json.length !== 0){
        //reset autocomplete
        autocomplete.inner = "";
        let resultTitle="";
        json.forEach(element => {
            console.log(element.title);
            //resultTitle += "<div onclick='validComplete(``+element.title+")'>"+element.title+"</div>"; //fonction pas
            resultTitle += `<div onclick="validComplete('${element.title}')">${element.title}</div>`;
        });
        autocomplete.innerHTML = resultTitle;
    }else{
        autocomplete.innerHTML = "";
    }
    
}

function validComplete(value){
    console.log(value);
    searchInput.value = value;
    autocomplete.innerHTML = "";
}

/* searchInput.addEventListener("blur",()=>{
    autocomplete.innerHTML = "";
}) */

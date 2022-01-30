var randomList=["javascript", "php","css","html","csharp"];
var chosenLetter;
var randomword;

function checkLetter(){
    chosenletter=document.getElementById("myText").value;
    console.log(chosenLetter);
    createrandomword();
}

function createrandomword() {
    randomword=randomwordList[Math.floor(Math.random()* randomwordList.length)];
    console.log(randomWord);

}

function checkLetterWord(){
    for (var i = 0; i < randomword.length; i++){
    var res = randomWord.split("");
    if (res[i]==(chosenLetter) >= 0);
    //for loopje om te checken of een letter in res zit 
    }
}
// console.log("page presentation index ok");

var btnStages = document.getElementById('btn-stages');
    btnSeances = document.getElementById('btn-seances'),
    btnEvents = document.getElementById('btn-events'),
        
    hiddenSeances = document.getElementById('presentation-seances'),
    hiddenStages = document.getElementById('presentation-stages'),
    hiddenEvents = document.getElementById('presentation-events'),
    hiddenContact = document.getElementById('presentation-contact');

var btn = [btnSeances, btnStages, btnEvents];


for (let i = 0; i < btn.length; i++) {

    btn[i].addEventListener('click', function () {
        
        if (btn[i] === btnSeances) {
            hiddenSeances.style.display = "block";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "block";
        }
        else if (btn[i] === btnStages) {
            hiddenSeances.style.display = "none";
            hiddenStages.style.display = "block";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "none";

        }
        else if (btn[i] === btnEvents) {
            hiddenSeances.style.display = "none";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "block";
            hiddenContact.style.display = "none";
        }
        else {
            hiddenSeances.style.display = "none";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "block";
        }
    })
}

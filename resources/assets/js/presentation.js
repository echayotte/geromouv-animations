var btnStages = document.getElementById('btn-stages');
    btnActivities = document.getElementById('btn-activities'),
    btnEvents = document.getElementById('btn-events'),
        
    hiddenActivities = document.getElementById('presentation-activities'),
    hiddenStages = document.getElementById('presentation-stages'),
    hiddenEvents = document.getElementById('presentation-events'),
    hiddenContact = document.getElementById('presentation-contact');

var btn = [btnActivities, btnStages, btnEvents];


for (let i = 0; i < btn.length; i++) {

    btn[i].addEventListener('click', function () {
        
        if (btn[i] === btnActivities) {
            hiddenActivities.style.display = "block";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "block";
        }
        else if (btn[i] === btnStages) {
            hiddenActivities.style.display = "none";
            hiddenStages.style.display = "block";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "none";

        }
        else if (btn[i] === btnEvents) {
            hiddenActivities.style.display = "none";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "block";
            hiddenContact.style.display = "none";
        }
        else {
            hiddenActivities.style.display = "none";
            hiddenStages.style.display = "none";
            hiddenEvents.style.display = "none";
            hiddenContact.style.display = "block";
        }
    })
}

//set Attributes of buttons to have an anchor for mobile
if (window.matchMedia('screen and (max-width: 600px)').matches) {

    var anchorActivities = document.getElementById("anchor-activities");
    var aActivities = document.createAttribute("href");
    aActivities.value = "#presentation-activities";
    anchorActivities.setAttributeNode(aActivities);
    

    var anchorStages = document.getElementById("anchor-stages");
    var aStages = document.createAttribute("href");
    aStages.value = "#presentation-stages";
    anchorStages.setAttributeNode(aStages);

    var anchorEvents = document.getElementById("anchor-events");
    var aEvents = document.createAttribute("href");
    aEvents.value = "#presentation-events";
    anchorEvents.setAttributeNode(aEvents);
    
}
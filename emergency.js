function eCheck() {
    if (document.getElementById('yescheck').checked) {
        document.getElementById('Emergency').style.visibility = 'visible';
		document.getElementById('Emergencytitle').style.visibility = 'visible';
		document.getElementById('singlesubmit').style.visibility='hidden';
    } else {
        document.getElementById('Emergency').style.visibility = 'hidden';
		document.getElementById('Emergencytitle').style.visibility = 'hidden';
		document.getElementById('singlesubmit').style.visibility='visible';}
    }

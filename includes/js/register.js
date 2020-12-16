var form = document.getElementByTagName('myForm'),
	mdp1 = document.getElementById('mdp'),
	mdp2 = document.getElementById('mdp2'),
	error = document.getElementById('error');


	mdp2.addEventListener("input", (event){

		if (mdp == mdp2) {
			error.innerHTML = '';
			error.className = 'error';


		}
	}, false)

	form.addEventListener('submit', (event) {
		
		if(mdp != mdp2) {
			error.innerHTML = 'tromper fdp';
			error.className = 'error active'; 
			event.preventDefault();
		}
	},false)
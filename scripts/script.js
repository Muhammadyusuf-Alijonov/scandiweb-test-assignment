let generated_li = document.querySelector(".generated_li");
let selector = document.getElementById('type_switcher');

selector.addEventListener('change', function (){
	const selectedOption = selector.value;
	generated_li.textContent = '';

	if (selectedOption === 'DVD'){
		const dvd_label = document.createElement('label');
		dvd_label.textContent = "Size of DVD: ";
		dvd_label.className = 'label';
			
		const dvd = document.createElement('input');
		dvd.type = 'number';
		dvd.name = 'dvd_input';
		dvd.placeholder = 'Enter the size (in MB)';
		dvd.className = 'input';

		generated_li.appendChild(dvd_label);
		generated_li.appendChild(dvd);

	} else if (selectedOption === 'Furniture') {
		const height_label = document.createElement('label');
		height_label.textContent = 'Height: ';

		const height = document.createElement('input');
		height.type = 'number';
		height.name = 'height_input';
		height.placeholder = 'Enter the Height: ';
		height.className = 'furniture-input';

		const width_label = document.createElement('label');
		width_label.textContent = 'Width: ';

		const width = document.createElement('input');
		width.type = 'number';
		width.name = 'width_input';
		width.placeholder = 'Enter the Width';
		width.className = 'furniture-input';

		const length_label = document.createElement('label');
		length_label.textContent = 'Length: ';

		const length = document.createElement('input');
		length.type = 'number';
		length.name = 'length_input';
		length.placeholder = 'Enter the Width';
		length.className = 'furniture-input';

		generated_li.appendChild(height_label);
		generated_li.appendChild(height);

		generated_li.appendChild(width_label);
		generated_li.appendChild(width);

		generated_li.appendChild(length_label);
		generated_li.appendChild(length);

	} else if (selectedOption === 'Book') {

		const weight_label = document.createElement('label');
		weight_label.textContent = 'Weight of Book: '

		const weight = document.createElement('input');
		weight.type = 'number';
		weight.name = 'weight_input';
		weight.placeholder = 'Enter the weight (in Kg): ';
		weight.className = 'weigth-input';

		generated_li.appendChild(weight_label);
		generated_li.appendChild(weight);
	}
})

document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".inputs input");
    
    inputs.forEach(input => {
        input.addEventListener("focus", function () {
            const errorMessage = document.createElement("p");
            errorMessage.classList.add("error-message");
            errorMessage.textContent = "This field cannot be empty";
            
            if (!input.parentNode.querySelector(".error-message")) {
                input.parentNode.appendChild(errorMessage);
            }
        });
        
        input.addEventListener("blur", function () {
            const errorMessage = input.parentNode.querySelector(".error-message");
            if (input.value.trim() === "") {
                errorMessage.style.display = "block";
            } else {
                errorMessage.style.display = "none";
            }
        });
    });
});

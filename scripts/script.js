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
		dvd.name = 'size_input';
		dvd.placeholder = 'Enter the size (in MB)';
		dvd.className = 'input';

		generated_li.appendChild(dvd_label);
		generated_li.appendChild(dvd);

	} else if (selectedOption === 'Furniture') {
		const height_label = document.createElement('label');
		height_label.textContent = 'Height: ';

		const height = document.createElement('input');
		height.type = 'text';
		height.name = 'height_input';
		height.placeholder = 'Enter the Height: ';
		height.className = 'furniture-input';

		const width_label = document.createElement('label');
		width_label.textContent = 'Width: ';

		const width = document.createElement('input');
		width.type = 'text';
		width.name = 'width_input';
		width.placeholder = 'Enter the Width';
		width.className = 'furniture-input';

		const length_label = document.createElement('label');
		length_label.textContent = 'Length: ';

		const length = document.createElement('input');
		length.type = 'text';
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
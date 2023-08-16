let generated_li = document.querySelector(".generated_li");
let selector = document.getElementById('type_switcher');

selector.addEventListener('change', function (){
	const selectedOption = selector.value;
	generated_li.textContent = '';

	if (selectedOption === 'DVD'){
		const dvd_label = document.createElement('label');
		dvd_label.textContent = "Size of DVD (in MB):";

		const dvd = document.createElement('input');
		dvd.type = 'number';
		dvd.step = '00.01';
		dvd.name = 'size_input';
		dvd.placeholder = 'Enter the size...';
		dvd.className = 'input size-input dimension';

		generated_li.appendChild(dvd_label);
		generated_li.appendChild(dvd);

	} else if (selectedOption === 'Furniture') {
		const height_label = document.createElement('label');
		height_label.textContent = 'Height: ';

		const height = document.createElement('input');
		height.type = 'number';
		height.step = '00.01';
		height.name = 'height_input';
		height.placeholder = 'Enter the height... ';
		height.className = 'furniture-input dimension';

		const width_label = document.createElement('label');
		width_label.textContent = 'Width: ';

		const width = document.createElement('input');
		width.type = 'number';
		width.step = '00.01';
		width.name = 'width_input';
		width.placeholder = 'Enter the width...';
		width.className = 'furniture-input dimension';

		const length_label = document.createElement('label');
		length_label.textContent = 'Length: ';

		const length = document.createElement('input');
		length.type = 'number';
		length.step = '00.01';
		length.name = 'length_input';
		length.placeholder = 'Enter the length...';
		length.className = 'furniture-input dimension';

		generated_li.appendChild(height_label);
		generated_li.appendChild(height);

		generated_li.appendChild(width_label);
		generated_li.appendChild(width);

		generated_li.appendChild(length_label);
		generated_li.appendChild(length);

	} else if (selectedOption === 'Book') {

		const weight_label = document.createElement('label');
		weight_label.textContent = 'Weight of Book (in Kg): '

		const weight = document.createElement('input');
		weight.type = 'number';
		weight.step = '00.01';
		weight.name = 'weight_input';
		weight.placeholder = 'Enter the weight... ';
		weight.className = 'weigth-input dimension';

		generated_li.appendChild(weight_label);
		generated_li.appendChild(weight);
	}
})


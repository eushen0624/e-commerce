//Steps we will take
// 1. We need to capture all the add to cart button
// 2. We need to attach and event listener to  each buttons
// 3. we need to get the data from the button
// 4. we need to get the quantity from the input
// 5. we need to check if the quantity is > 0
// 6. if yes, send the data to th controller via... fetch




let addToCartBtns = document.querySelectorAll(".addToCart");
// console.log(addToCartBtns);

addToCartBtns.forEach(indiv_btn=>{

	indiv_btn.addEventListener("click", btn=>{
		let id = btn.target.getAttribute("data-id");
		let quantity = btn.target.previousElementSibling.value;

		if(quantity <= 0){
			alert("Please enter valid quantity");
		}else{
			let data = new FormData;

			data.append("id", id);
			data.append("cart", quantity);

			fetch("../../controllers/add-to-cart-process.php", {
				method: "POST",
				body: data
			})
			.then(response=>{
				return response.text();
			})
			.then(res=>{
				document.getElementById('cartCount').textContent = res;
			})
		}
	})
})



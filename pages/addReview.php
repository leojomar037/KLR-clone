
<div class="review">
	<link rel="stylesheet" href="/css/addReview.css">
    <form action="../../inc/addReview.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="review">Review:</label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>

		<div class="stars">
			<input class="stars__checkbox" type="radio" id="first-star" name="rate" value="5">
			<label class="stars__star" for="first-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="second-star" name="rate" value="4">
			<label class="stars__star" for="second-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="third-star" name="rate" value="3">
			<label class="stars__star" for="third-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="fourth-star" name="rate" value="2">
			<label class="stars__star" for="fourth-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="fifth-star" name="rate" value="1">
			<label class="stars__star" for="fifth-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
		</div>

		<button type="submit" name="addReview">Submit</button>
	</form>
</div>

<div id="home">
	<div id="home-intro-panel">
		<p>Looking good can be hard, but it's easy if you've got a capsule wardrobe. The outfit below is randomly selected from the items in <a href="/capsule-wardrobe">our capsule</a>. Not bad, right?</p>
		<p>Click the button to generate a new look in the blink of an eye, and never worry about what to wear again! <button v-on:click="generateNewOutfit" id="generate-outfit">Generate new outfit</button></p>
	</div>
	<div id="generated-outfit">
		<div v-html="content">Please enable Javascript...</div>
	</div>
</div>
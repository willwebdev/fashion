var vmOutfit = new Vue({
	el: '#home',
	created() {
		this.generateNewOutfit();
	},
	data: {
		content: null
	},
	methods: {
		generateNewOutfit: function() {
			this.$http.get('/generate-outfit').then(response => {
            	this.content = response.body;
            });
		}
	}
});
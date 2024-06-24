const { createApp } = Vue;

createApp({
	data() {
		return {
			urlServer: "http://localhost/php-dischi-json/server.php",
			ListAlbum: [],
		};
	},
	methods: {
		getListAlbum() {
			axios.get(this.urlServer).then((response) => {
				console.log(response.data);
				this.ListAlbum = response.data;
			});
		},
		bottomRanks(index) {
			if (index >= 6) return true;
			else return false;
		},
	},
	created() {
		this.getListAlbum();
	},
}).mount("#app");

new Vue({
	el: '#app',
	data: {
		arr_songs: [],
		urlApi: location.href + 'api.php',
	},
	created() {
		axios.get(this.urlApi)
			.then(axiosResponse => {
				
				this.arr_songs = axiosResponse.data
			});
	}
})
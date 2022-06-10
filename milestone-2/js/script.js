


const app = new Vue({
    el: "#root",
    data: {
      name: "disk",
      album: [],
    },
    created() {
      axios
        .get("http://localhost:8888/php-ajax-dischi/api/server.php")
        .then((resp) => {
          this.album = resp.data;
          console.log(this.album);
        });
    },
  });

var e = (window.location.host, $(".fb-album-container-1").attr("data-album-id-1"));
        console.log(e);
        $(document).ready(function () {
          $(".fb-album-container-1").FacebookAlbumBrowser({
                account: "natgeo",
                accessToken: "775908159169504|cYEIsh0rs25OQQC8Ex2hXyCOut4",
                onlyAlbum: e,
                showComments: false,
                commentsLimit:3,
                showAccountInfo: false,
                showImageCount: false,
                showImageText: false,
                shareButton: false,
                albumsPageSize: 0,
                photosPageSize: 4,
                lightbox: true,
                photosCheckbox: false,
				pluginImagesPath: "../src/",
                likeButton: false,
                shareButton: false,
                //addThis:"ra-52638e915dd79612",
                photoChecked: function(photo){
                    console.log("PHOTO CHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                photoUnchecked: function (photo) {
                    console.log("PHOTO UNCHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                albumSelected: function (photo) {
                    console.log("ALBUM CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                },
                photoSelected: function (photo) {
                    console.log("PHOTO CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                }
            });

        });   
        
        
        var e2 = (window.location.host, $(".fb-album-container-2").attr("data-album-id-2"));
        console.log(e2);
        $(document).ready(function () {
          $(".fb-album-container-2").FacebookAlbumBrowser({
                account: "LoopersID",
                accessToken: "775908159169504|cYEIsh0rs25OQQC8Ex2hXyCOut4",
                onlyAlbum: e2,
                showComments: false,
                commentsLimit:3,
                showAccountInfo: false,
                showImageCount: false,
                showImageText: false,
                shareButton: false,
                albumsPageSize: 0,
                photosPageSize: 4,
                lightbox: true,
                photosCheckbox: false,
				pluginImagesPath: "../src/",
                likeButton: false,
                shareButton: false,
                //addThis:"ra-52638e915dd79612",
                photoChecked: function(photo){
                    console.log("PHOTO CHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                photoUnchecked: function (photo) {
                    console.log("PHOTO UNCHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                albumSelected: function (photo) {
                    console.log("ALBUM CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                },
                photoSelected: function (photo) {
                    console.log("PHOTO CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                }
            });

        }); 
        
        var e3 = (window.location.host, $(".fb-album-container-3").attr("data-album-id-3"));
        console.log(e2);
        $(document).ready(function () {
          $(".fb-album-container-3").FacebookAlbumBrowser({
                account: "LoopersID",
                accessToken: "775908159169504|cYEIsh0rs25OQQC8Ex2hXyCOut4",
                onlyAlbum: e3,
                showComments: false,
                commentsLimit:3,
                showAccountInfo: false,
                showImageCount: false,
                showImageText: false,
                shareButton: false,
                albumsPageSize: 0,
                photosPageSize: 4,
                lightbox: true,
                photosCheckbox: false,
				pluginImagesPath: "../src/",
                likeButton: false,
                shareButton: false,
                //addThis:"ra-52638e915dd79612",
                photoChecked: function(photo){
                    console.log("PHOTO CHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                photoUnchecked: function (photo) {
                    console.log("PHOTO UNCHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
                },
                albumSelected: function (photo) {
                    console.log("ALBUM CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                },
                photoSelected: function (photo) {
                    console.log("PHOTO CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                }
            });

        });

$("#color").change(function () {
                if ($('#canvas').css("background-image") !== null) {
                    $('#canvas').removeAttr("style");
                    $('#front-side').removeAttr("style");
                    $('#left-side').removeAttr("style");
                    $('#right-side').removeAttr("style");
                    $('#back-side').removeAttr("style");
                }
                $('#canvas').css("background-color", this.value);
                $('#front-side').css("background-color", this.value);
                $('#left-side').css("background-color", this.value);
                $('#right-side').css("background-color", this.value);
                $('#back-side').css("background-color", this.value);
            });

            $("#front-side").click(function () {
                $('#img_avatar').attr("src", this.src);
            });
            $("#left-side").click(function () {
                $('#img_avatar').attr("src", this.src);
            });
            $("#right-side").click(function () {
                $('#img_avatar').attr("src", this.src);
            });
            $("#back-side").click(function () {
                $('#img_avatar').attr("src", this.src);
            });

            $("#camouflag").click(function () {
                $('#canvas').css("background-image", 'url(' + this.src + ')');
                $('#front-side').css("background-image", 'url(' + this.src + ')');
                $('#left-side').css("background-image", 'url(' + this.src + ')');
                $('#right-side').css("background-image", 'url(' + this.src + ')');
                $('#back-side').css("background-image", 'url(' + this.src + ')');
            });
			
			$("#wool").click(function () {
                $('#canvas').css("background-image", 'url(' + this.src + ')');
                $('#front-side').css("background-image", 'url(' + this.src + ')');
                $('#left-side').css("background-image", 'url(' + this.src + ')');
                $('#right-side').css("background-image", 'url(' + this.src + ')');
                $('#back-side').css("background-image", 'url(' + this.src + ')');
            });
			$("#snake").click(function () {
                $('#canvas').css("background-image", 'url(' + this.src + ')');
                $('#front-side').css("background-image", 'url(' + this.src + ')');
                $('#left-side').css("background-image", 'url(' + this.src + ')');
                $('#right-side').css("background-image", 'url(' + this.src + ')');
                $('#back-side').css("background-image", 'url(' + this.src + ')');
            });

$("#color-female").change(function () {
                if ($('#canvas-female').css("background-image") !== null) {
                    $('#canvas-female').removeAttr("style");
                    $('#front-side-female').removeAttr("style");
                    $('#left-side-female').removeAttr("style");
                    $('#right-side-female').removeAttr("style");
                    $('#back-side-female').removeAttr("style");
                }
                $('#canvas-female').css("background-color", this.value);
                $('#front-side-female').css("background-color", this.value);
                $('#left-side-female').css("background-color", this.value);
                $('#right-side-female').css("background-color", this.value);
                $('#back-side-female').css("background-color", this.value);
            });

            $("#front-side-female").click(function () {
                $('#img_avatar-female').attr("src", this.src);
            });
            $("#left-side-female").click(function () {
                $('#img_avatar-female').attr("src", this.src);
            });
            $("#right-side-female").click(function () {
                $('#img_avatar-female').attr("src", this.src);
            });
            $("#back-side-female").click(function () {
                $('#img_avatar-female').attr("src", this.src);
            });

            $("#camouflag-female").click(function () {
                $('#canvas-female').css("background-image", 'url(' + this.src + ')');
                $('#front-side-female').css("background-image", 'url(' + this.src + ')');
                $('#left-side-female').css("background-image", 'url(' + this.src + ')');
                $('#right-side-female').css("background-image", 'url(' + this.src + ')');
                $('#back-side-female').css("background-image", 'url(' + this.src + ')');
            });
			
			$("#wool-female").click(function () {
                $('#canvas-female').css("background-image", 'url(' + this.src + ')');
                $('#front-side-female').css("background-image", 'url(' + this.src + ')');
                $('#left-side-female').css("background-image", 'url(' + this.src + ')');
                $('#right-side-female').css("background-image", 'url(' + this.src + ')');
                $('#back-side-female').css("background-image", 'url(' + this.src + ')');
            });
			$("#snake-female").click(function () {
                $('#canvas-female').css("background-image", 'url(' + this.src + ')');
                $('#front-side-female').css("background-image", 'url(' + this.src + ')');
                $('#left-side-female').css("background-image", 'url(' + this.src + ')');
                $('#right-side-female').css("background-image", 'url(' + this.src + ')');
                $('#back-side-female').css("background-image", 'url(' + this.src + ')');
            });

$("#male_shirt").click(function(){
	 $('#img_avatar').attr("src", 'Assets/img/models/male_shirt_front.png');
	 $('#front-side').attr("src", 'Assets/img/models/male_shirt_front.png');
	 $('#left-side').attr("src", 'Assets/img/models/male_shirt_left.png');
	 $('#right-side').attr("src", 'Assets/img/models/male_shirt_right.png');
	 $('#back-side').attr("src", 'Assets/img/models/male_shirt_back.png');
})

$("#male_t-shirt_long").click(function(){
	 $('#img_avatar').attr("src", 'Assets/img/models/male_long.png');
	 $('#front-side').attr("src", 'Assets/img/models/male_long.png');
	 $('#left-side').attr("src", 'Assets/img/models/male_long_left.png');
	 $('#right-side').attr("src", 'Assets/img/models/male_long_right.png');
	 $('#back-side').attr("src", 'Assets/img/models/male_long_back.png');
})

$("#male_t-shirt_short").click(function(){
	 $('#img_avatar').attr("src", 'Assets/img/models/male_short_front.png');
	 $('#front-side').attr("src", 'Assets/img/models/male_short_front.png');
	 $('#left-side').attr("src", 'Assets/img/models/male_short_left.png');
	 $('#right-side').attr("src", 'Assets/img/models/male_short_right.png');
	 $('#back-side').attr("src", 'Assets/img/models/male_short_back.png');
})

$("#female_t-shirt_long").click(function(){
	 $('#img_avatar-female').attr("src", 'Assets/img/models/female_long_front.png');
	 $('#front-side-female').attr("src", 'Assets/img/models/female_long_front.png');
	 $('#left-side-female').attr("src", 'Assets/img/models/female_long_left.png');
	 $('#right-side-female').attr("src", 'Assets/img/models/female_long_right.png');
	 $('#back-side-female').attr("src", 'Assets/img/models/female_long_back.png');
})

$("#female_flowy").click(function(){
	 $('#img_avatar-female').attr("src", 'Assets/img/models/female_sleeveless_front.png');
	 $('#front-side-female').attr("src", 'Assets/img/models/female_sleeveless_front.png');
	 $('#left-side-female').attr("src", 'Assets/img/models/female_sleeveless_left.png');
	 $('#right-side-female').attr("src", 'Assets/img/models/female_sleeveless_right.png');
	 $('#back-side-female').attr("src", 'Assets/img/models/female_sleeveless_back.png');
})

$("#female_shirt").click(function(){
	 $('#img_avatar-female').attr("src", 'Assets/img/models/female_short_front.png');
	 $('#front-side-female').attr("src", 'Assets/img/models/female_short_front.png');
	 $('#left-side-female').attr("src", 'Assets/img/models/female_short_left.png');
	 $('#right-side-female').attr("src", 'Assets/img/models/female_short_right.png');
	 $('#back-side-female').attr("src", 'Assets/img/models/female_short_back.png');
})

$("#female_sleevless").click(function(){
	 $('#img_avatar-female').attr("src", 'Assets/img/models/women_sleeveless_front.png');
	 $('#front-side-female').attr("src", 'Assets/img/models/women_sleeveless_front.png');
	 $('#left-side-female').attr("src", 'Assets/img/models/women_sleeveless_left.png');
	 $('#right-side-female').attr("src", 'Assets/img/models/women_sleeveless_right.png');
	 $('#back-side-female').attr("src", 'Assets/img/models/women_sleeveless_back.png');
})

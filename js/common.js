
$(document).ready(function(){
	$(window).scroll(function () {
		if ($(this).scrollTop() > 75) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#back-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

});

var courseList = {
	"DC_1": "QUALIFI Level 2 Diploma in Care",
	"DC_2": "QUALIFI Level 3 Diploma in Health and Social Care",
	"DC_3": "QUALIFI Level 4 Diploma in Health and Social Care",
	"DC_4": "QUALIFI Level 5 Diploma in Health and Social Care",
	"DC_5": "QUALIFI Level 3 Diploma in Introduction to Management",
	"DC_6": "QUALIFI Level 3 Diploma in Business Management",
	"DC_7": "QUQUALIFI Level 3 Integrated Diploma in Business and Management",
	"DC_8": "QUALIFI Level 4 Diploma in Business Management",
	"DC_9": "QUALIFI Level 5 Diploma in Business Management",
	"DC_10": "QUALIFI Level 5 Diploma in Business Enterprise",
	"DC_11": "QUALIFI Level 7 Diploma in Executive Management",
	"DC_12": "QUALIFI Level 7 Diploma in Strategic Management and Leadership",
	"DC_13": "QUALIFI Level 3 Diploma in Business Innovation and Entrepreneurship",
	"DC_14": "QUALIFI Level 4 Diploma in Entrepreneurship",
	"DC_15": "QUALIFI Level 7 Diploma in Strategic Management and Innovation",
	"DC_16": "QUALIFI Level 7 Diploma in Human Resource Management",
	"DC_17": "QUALIFI Level 6 Diploma in Business Administration",
	"DC_18": "QUALIFI Level 7 Diploma in Business Strategy",
	"DC_19": "QUALIFI Level 3 Diploma in Hospitality and Tourism Management",
	"DC_20": "QUALIFI Level 4 Diploma in Hospitality and Tourism Management",
	"DC_21": "QUALIFI Level 5 Diploma in Hospitality and Tourism Management",
	"DC_22": "QUALIFI Level 7 Diploma in Hospitality and Tourism Management",
	"DC_23": "QUALIFI Level 7 Diploma in Accounting and Finance",
	"DC_24": "QUALIFI Level 7 Diploma in International Business Law",
	"DC_25": "QUALIFI Level 2 Award in Food Hygiene, Safety and Professional Workplace Effectiveness",
	"DC_26": "QUALIFI Level 3 Diploma in Cyber Security Management and Operations",
	"BA_1": "BA (Hons) in Business Management (Top-up)",
	"MD_1": "Master of Business Administration (Top-up)"
}
	
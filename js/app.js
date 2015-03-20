$(document).ready(function() {
	ko.applyBindings(new TestViewModel());
});

var TestViewModel = function() {
	var self = this;
	
	function AwardShow(name, description, year, type, criteria, panel) {
		var self = this;
		self.ShowName = ko.observable(name || "");
		self.Description = ko.observable(description || "");
		self.Year = ko.observable(year || 2015);
		self.Type = ko.observable(type || "");
		self.Criteria = ko.observable(criteria || "");
		self.VotingPanel = ko.observable(panel || "");
	}

	self.awardShows = ko.observableArray([]);
	
	$.getJSON("php/getSample.php", function(shows) {
		var mappedAwards = $.map(shows, function(item) {
			return new AwardShow(item.ShowName, item.Description, item.Year, item.Type, item.Criteria, item.VotingPanel);
		});

		self.awardShows(mappedAwards);
	});

	self.value1 = ko.observable("");
	self.value2 = ko.observable("");

	self.postToDB = function() {
		$.ajax({
			url: "php/postSample.php",
			type: "post",
			data: "value1=" + encodeURIComponent(self.value1().toString()) + "&value2=" + encodeURIComponent(self.value2().toString()),
			cache: false,
			success: function() {
				alert("Your data was successfully submitted!");
			},
			error: function() {
				alert("Shit, something went wrong.");
			}
		});
	}
};

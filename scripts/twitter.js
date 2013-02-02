(function() {
  $(document).ready(function() {
    var tweetCount, twitterHandle, url;
    twitterHandle = "allenmhc";
    tweetCount = 5;
    url = "http://search.twitter.com/search.json?q=from:" + twitterHandle + "&amp;rpp=" + tweetCount + "&amp;callback=?";
    return $.getJSON(url, function(data) {
      return data.results.forEach(function(r) {
        return console.log(r);
      });
    });
  });
}).call(this);

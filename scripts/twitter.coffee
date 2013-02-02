$(document).ready ->
  twitterHandle = "allenmhc"
  tweetCount = 5
  url = "http://search.twitter.com/search.json?q=from:#{twitterHandle}&amp;rpp=#{tweetCount}&amp;callback=?"

  $.getJSON(url, (data) ->
    data.results.forEach (r) ->
      console.log r
  )

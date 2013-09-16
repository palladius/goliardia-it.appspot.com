
from here:

https://developers.google.com/appengine/docs/php/

X-AppEngine-Country
Country from which the request originated, as an ISO 3166-1 alpha-2 country code. App Engine determines this code from the client's IP address.
X-AppEngine-Region
Name of region from which the request originated. This value only makes sense in the context of the country in X-AppEngine-Country. For example, if the country is "US" and the region is "ca", that "ca" means "California", not Canada.
X-AppEngine-City
Name of the city from which the request originated. For example, a request from the city of Mountain View might have the header value mountain view.
X-AppEngine-CityLatLong
Latitude and longitude of the city from which the request originated. This string might look like "37.386051,-122.083851" for a request from Mountain View.

Sth like this:
<pre>
for $i in $HEADERS:
  print $i, $HEADERS[$i];
</pre>

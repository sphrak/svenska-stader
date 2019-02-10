## Svenska Städer 🇸🇪
A `.csv` list of Swedish cities along with the municipality and county in which they reside in. Latitude and longitude in [WGS84](https://en.wikipedia.org/wiki/World_Geodetic_System#A_new_World_Geodetic_System:_WGS_84) format included.

### Example
| Locality/Ort | Municipality/Kommun | County/Län | Latitude/Latitud | Longitude/Longitud |
|:------------- |:------------- |:----- |:----- |:----- |
| Angered | Göteborg| Västra Götaland | 57.707232 | 11.967017 |
| Helsingborg | Helsingborg | Skåne | 56.044198 | 12.704068 |
| Malmö | Malmö | Skåne| 55.605293 | 13.000156 |
| Norrköping | Norrköping | Östergötland | 58.590912 | 16.190351 |
| Stockholm | Stockholm | Stockholm | 59.325117 | 18.071093 |

### Contributing
If you feel something is missing or something is incorrect, either fork and create 
a [pull request](https://github.com/sphrak/svenska-stader/pulls) or submit an [issue](https://github.com/sphrak/svenska-stader/issues). 

All modifications to `svenska-stader.csv` must be sorted with swedish locale `sv_SE.UTF-8`.
On any linux distro with `coreutils` and `sv_SE.UTF-8` locale available on the system
you can run the sort script which does it automatically for you.

```sh
./sort.sh
```

## License

	Copyright 2019 Niclas Kron

	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

	   http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License.

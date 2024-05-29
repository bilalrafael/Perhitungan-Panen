@include('layout.header')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<div class="" style="width : 100%; height: 50px;padding-top:10px;padding-left:10px; background-image: linear-gradient(to bottom right, rgba(0, 255, 0, 0.8), transparent)">
    <a href="/">
        <i class="fa fa-arrow-left"></i> <i style="font-weight: bold;">Petani Sumber Bahagia</i>
    </a>
</div>
<a href="/form" class="btn btn-warning mt-4 ml-3">
    <span class="fw-bold text-white"> + Tambah Data</span>
</a>

@foreach($terong as $d)
<div class="card" style="width: 90%; margin: auto; background-image: linear-gradient(to bottom right, rgba(0, 255, 0, 0.8), transparent), url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQA0QMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAFBgQHAAEDAv/EAEYQAAIBAwMCBAMEBggEBAcAAAECAwQFEQASIQYxE0FRYSJxgRQykaEHFSNCscEzUpKT0eHw8RZTVGIXJHKCJTRDVWWisv/EABoBAAMBAQEBAAAAAAAAAAAAAAIDBAUBAAb/xAAqEQACAgEEAgIBAwUBAAAAAAABAgADEQQSITETQSIyURRhgQUzcaHwUv/aAAwDAQACEQMRAD8A7UstvufTn6oNVHRTQyCRZJ/uygk+nPbUAdO3Cncy0VZRysvIaCpAP4HGgEisARgD568IpHG7A9jrKzt/iI4Ihf8A4kujYJq24BHAGDolbeqauDP6w21CEcbMBwdDaijoJrQayKHwpQ+zKMe+o9qZKOVmqqWOujZceHMSNvuGHIOmU66zOQx/mD4kPEY63qOirqfw0jmWUHKFwCM/7aQAGhvMsKnAkJXGPXkaK3SR1q/Ftlv8KAKv7J5S5z5kH09tDoHknuSzuFR42DsG4Awe2mPc1rb2M7WmzgQ1YvHoOpEV1O9AdyhuDjj+emPrK2x3Sw/bab+lhXxYz/WQj4l+XY/TQfp6AXzqxRHNHEBvnkIydqqQSPn/AIaYbza3lsFZSU0hd6d2lTB4xncAD6FW49iNJUngmOI4zK1jnFNTzOh2zEHb8tRbRUSQUVQ0Z+NUbk9zgj/HTHXGin6CjaMbaulqEDkjkl2IK58+P4aV6MFft6HskTD89aC1KBwc5na2yJcVF1U9NYLe4oQ8ssIGWlweBjPAP4aVy1VNWvWUsaw1DYL/AGc7Fz8tNVnghqujrQkngSTCHEKSvjknkse+BxwO+htNFLQXGtlrqaGKip4mjhdFCrKw7nkkknHGkBGZsJE2MBmdaOWsuQCVTxMaRi4Ma4DyvwufljOilHSQW/8A8zIfFeJSWkk5yo5OB+7xntoBabvDT0dEsQEk09XJJOinz+6B+Az9dGri8hs9Q5eQVXhlsxn4T7Y1yrVUUki77NPOrEjB4gK9XsVV7ZKaXAl2OiNxuTgZP5/lo1WkUUcjVC5x9xyO/wA8eeqftlSz3en8V2LZaJmJ8jkDTMLhXzblnqpXUn4kdiV/DQ6zT0WVcjn0Yy3vI6nuoYyzPI/DOckDy1yX4HV17ocj567x4cZxtI9O2pItsko5liD7chSeT7ahxtEVO1nuLCrdp2d2cEBV75+ujGd7KrZBby1DsNnhgrYqq5zxoqvhYPvb+P3vQan3Onp6Sv8A/hxLwEDOfI+ePUaHUV5QPmeIzxIEsm6QqWKnODqRBTVUsXhrEfDLAl2wM6lww0PjQxyBS0hw0sxyVGp0FTRPXTRFnFOnwrgAlvfUexyMjieAmqaFKePagyR+83f8dToIIKqnbZO0lSQQsUS7jn35412jkpbxRLSLGsaxsGqcADci8/gSB+ep9nrIY6KleqcQsYgkMBPx7fUKOef4a0dJ/Sk/uO2YUH0VHWRVjxyskLU6h+2SVI4+fbGj9NbYmK1FYDPNjOH7J7AdhrTNPUTeJBTJCdu0zT98d8BRz+Y1taBZP/m5XqP+1vhX+yNaVWmSkFVE6BJmaX0p/wD9dZrl+rqL/pof7sazTdph4lY3ToqOpqjNRVIgVzl0dcgH2xpZvFkqrPIoqNpjf7ki9m/w09yXoCpceC32dVOJNvJPlx6aiXKuoqxDSXWCXYcMsinGPcaDUNo7MhTg/wCpChsEQ1knEPhRksu7cF9WxjtpktvTM9XTxNKWimdC7RbeUXTBaaG00dHLPb1V5VZMSOcuPiHr/LRVCwuXiswTIxknhvbUradFQtnP+I/0DEaOw1i3SGIftIg+W8sgeWo/UdDDa7xUoINkWcj/ALh3H8x9NWAJo0qzUTIka1OE9NhPYj699A/0m+FJBb9ixmRQwLqclhjn886T4WrXDf8ACEDmKVJGOn7JVVUE6PU1MfhxujZwsu0n67VOjHRV9grKeGhFSq3CCHwxEw4aJD8JHr8JA+Q0mWyHxLfXRVU7LHARNFjkscFQnP8A6h9NLs1RLR1sdRT/ANLG25MeZ/0dOSvPEePpiHL3LNDdqi1bUjiesWWRV5GU3YI9sNrhQyp4NdKx/pmWNB8z/tor1bQwxV1VVwSmaWZ9pdyB90ANgD3B0vRgrJCqkFYwZGx23d/8NXKhTgzoUqIw0rVE3gQQyPk4CjdgLzn+edOPVl7tslAaQVSTVClX/Z/EqkHzPbSlS0k/6vgqqNfGqfDZ/s+MsqDAz9Tnj20PiZZpBtDLGRkrtwV/20hLvGHA9yZqwzZPqdqCOrkjDQ/CN+5WPljA7fTVl01TOaGKRzFM+AGZVwNJXRtbTR1dStXWJDGkeI3kOQDntj651GNzq4JpRS1h2ljyrABvfHOsrVadrT/iGQSYqXeJqG/VkGTmKclfqcg/np2ssSXRVnVkRZU37cZO4cMPx/jpM6i8d6tq6UiRpSA7LzyBj09ANGOmbmYLZUGnIaam/bRxH7zDPxY9eNajIbaMe8RhGVj7JQW5aZp4qarCtlI2dxgOPM+2udHTRNtZwwC9iRnJ1HqLtHU0cNJRidmnKVMql0MYBXPwsBnzHf31KtdTBWUpq4lqfAV9rSKAyqfTgaxtTXYsAqR3JW1XYBV4A89e/CBPufXXKaqVITLChfA78ZHzGucdfFIis52uf3ew1FtbGcTk5XGD4GdRkjy11pofs8Xcgkcka9/bKTOJMK3u2dezVUoGfEyDpuX24InJq00wrbi0U0ki0zJio2tgvGDkj8+fbOrHt9spLerLRU6RZPJVeT8z3Oqxa4RJNGD4ixhgX2DllzyPw1Mlutdcd4aqnVQcRBX24XPnjvxrW0uqFVeGE5LLIPnnWgp8tVRVN1PSR1FVS1k/2OM5MiSgqPlk6n2brm9shjlp6epCAfE4KE/Ucflq39bXjLcTwYgyydreo1vSd/xhXf8A26D++P8AhrNc/Xaf/wBQ95ge607+BEkZj2QDAMRyW55+vHbSt1X1XQl/Ao6PdPGApO7aqkdx89Gb2lXaaCpqUlclY2GW5Azxn56q2gheqqY45Dne2fx5ydSaakWszMMD8TtFfkjJaeq68TSBZKeCNlw2Yi+QDn19tM9r6le5VUn2hY98IH3Adp98Z76r+SWC3ySAKr4xjjz/AMtO1nt1JR0SNTcrIAxlY8tn39NN1ZWqvCiNuRUXAEabzcKd6ZZnmigjSPeUJ7jzOTpFir36o6ujttBIhpfD/ZO7bVyBydZ1V1dC1qa0xR0tUwyqyFN2xfPnOCfTQvoSvSz3eOpenjlMWCwfueDx9BzpddTMDY3Zia6zGHrCyt070xRW4urytcZGkdRjcNrBc/TGkWmtslxuaRgEIn7Rvppi6z6im6hvVPvjWGnjVgkasWyc9yT5610/WigNRHFGxriQ8YEW/cAOcj276qpAVhuldAXcN3U5vZ6iorjJMpWip1B3FgA2fLn30Dlgjjm+yU8vil2/aOnbGew13vNxvd6ZaT7LVyEnhIomOfbAGjvS1FT9NCpr7zt/WdJteKjzkSeeCwyBzjOqLXUdT2oZSxIhvoeipnuIe4pLgDEFMqkmU88HzAHH+hqD1zZEttxiajb9nWsx2NwYj6aIdTS0klZ+t6WvgjDbHiWF971E2cvnn4VHbyz20Putz/X9UlQylRGqoijtkfeP48azm/Iko/M10vYYqtbhQABo0pzOslQcbZl9D6EcahxWdpomkijkXjcoKcEe2plGvjmrM8yxiKMlQckO2DhOPXXCW/VL1LyMkEUSoRHBCGCfxJ5/lpJFh6gFp4ax/a6GZGR2bwi4RBy2O+OfvDvj20opDWWW7R4hbxlO6NWX76kdvqNWl0q1Hf4hDWB6etgzKppYlQOoI/ewSDkjQvq2OlnupjqNu7YjHY2Sh7cHyOMcafVY1X2h12Y7ipSVO9Gji2JSSudkRwxTBztPpjTj0rK6Wq5Uyo2JpxKpA+FeG+EfU6V7lafsN0WMSiVVAKOBguMd2xxn30425orfbwjsEVf3ie59dT67UApmv3O2sD1NV9G8NkklhZnlNQhJP9Xb2/HXqlqUoaQR1mJHLfcx2BHcHQi9V5jhjjp5nDBnbKnBBIGCfLyOgputZLBHA83wRDC4UA/U9z9dAKTYggnPEfkSirIt8DAj8xriaFI+UOc6XulWae5E1BZqWGNncZwM9lBPudHKS4JSzPBVSpsVyAC24L9fTUtlL18g5nMY7niWn5znXKp3AgISo9uPz0eIjflVUqexHnrlJSoyMq459dCl46acxPVTckjsEdtgmDHaC4U55zknUSOoMVNGZUjRZBlQFwSO2SNbpqIRg+NjJ7c+Wh1fTTLIzqsjQKByeQnt7aczLdxieMnfrAf1Iv7H+et6CbfnrNL8KwY79X0323pi6wRsDIlOX2gjORz+eNUtbi5n8WMqNik/TVpXm7tUIySURV17bH5+R9tVzdaNfGlq7ZGTGRh4g2TH/lr6D9cltpA6jNIdgwYPq1VaqNZcbGb4znuM65TCWKUweJM8JG0JuOMZ9ND5pndtsxIKnz1rxnQjYxz5HOmkZlxKmT7jSyWwL4xjbfgphgTj3A7aJ9HEPXhpsbSjs2fPjH8CdLErvJ/SHJPrpn6bZIzI0iqcU7Y3eR0SiAg5mrcEnu8IwCNxx8jnTZ07Smn6wophFUOPiUCDv/t66TLU4iulKR23KT+edPMVQj3On+xTlJlOVKnB1FqjtbM9aPiRLKu84hhEMsxUyMAz5xjPYZ+eqVvkMhulVSsCZTWGPb3yS3A/PVkzIz0q1bTLHsUpGJ+S48zj1J/LST1jUYko7gyAVcVTumRVwHAIK8++0gn31PUp3/LvEhU5M99XW63WCmo6WgUNJJCJ5pnbLMTwo9vP8NTLJaoqmxSSwOFqaNN5iI+KRfPn56T7tX1FwqknZMySybxGDgKvkPpo5JX1Nns0Vw3gtJkEA+o7fI6Y1DsvxlArLCE6hKelio2lWKnWpYsm6bLSHGAdvkO/5aETwUcNUySzSeEpx8K8/hoBDd4zcqWuaPeoQJKrjPA4wPppqkoDdqtzbB4wMfiKufiOAMjnvjI1xtMVXOZ62jC7hDnSlZbaDxxbqpJKmUbdk6hDj0B0nTRzJcKkV6OJcsZARjJJ9/8AXOjtzsNvo4Ekasjp5CFAjmbG9vQH1136qt6U9PS1Cy75Qiwyhmye3B+XB1OilcnOQZKIu1tQtXUxukfhKqhMZzrtFcYRc6c1n7SJXxtz90eZ1CDOSUVAS3Y451OsVhq7xcYBBEmyPPjzFsBFOfibn/fGi8a+4eMyDWVTzIG3EpKnikeRYMVz+GhYlUNjONTZKKejq56Cd4ZGgjZUkhbcrgndkHQGOQmTew5HI9vfVKqOhDjZ0tPKILnI7xJC0aRgSNtBbJww9ccjRb7RFUxeDFTtI7DbuQYz+OoEYt7GzLSLGEhhMlTUtJuErFgT/Z5GPc6MUEbQwBnWT94rIO2PI6k1BXdzBcz3Rx3KyxqJikkRPxQ7ssn19fbReCdKuPxIW48x5jQyao8aZqyeYSccknUu2AtEDCFQSHO1e41n24c/EQQ06VCyYOwkHHfUeklqVinpw+RIQXJ9tGGiZRtdFYY7jXH7Oi7iqkZ5ONcW015BHMLMg/Zz/wAmP+zrNS9nvrNL8s9IrSUlwrhFTVCiXaF2SrgSnHr9dTOn+lJrbfDUyhTTmMlcMGwx8seY0K6stn2S9SLSr/TftIfDI4Ynt+P8dSF6uu1HTPS1saCqRgA8ifdAHbA4J1v1U002kvnIiGyeRPH6TOmLRFZZ7tFTKlTGyjEb7QwJ54I0m2DoqlvDMprJ1k+zCoWKMKxbJIxk8Z4H46ZuquoZLh0bWpWREShgVaJfgftwfTUjp56ii6ZtPUL+GYY6cp8C7SiE4w39YZwc60DajfNeRCDuqRHvfT0FtopQlJOk6gbvHfc3fyHlrdgiOa0qpyIsZ4wPx/lpg6zrnrqYvLt8eRwNycZXy166Slpv1XMgQGQElsqD3PHOg0h82WB4mpoazdwTAXTdr/WvU9JREkKOXPAIA9PqRpw6itL2K6IUdJQB4kRKAEL2Pbz1qxQ0sHVVJIiYmZ2Q4GMjaSPzGmH9KCrFZon8PdUjJUjvgZ4/HStYhVtpjdVV42Kxdp62e5lTOT+xG0Afx0P6zpUNrjlYl38VUU/PvovNb5oun4qy1VEaShlLlwNsqsONpPbUG7VD3Cms1nldHn+0tI0p43ADt278n8NZC6dxcCTMlPtEG7P4dyCK2PDwuBxjTN1jEU6ZhwOAw5+mk+6OWvNST8OJiPz07XOdbh0TwpchgSwHbW8n1l4zgSvqcsjPC+du4MPrppoLnNbxFU0kn7WnzgEnawIII/PQh4Fe1RVDqBJjhycEgHGPy13hUbpAThNoG4due2uAhgQRG0nyKyYmrncZKve9ZUGepYBIUQ4SMHuAPPTBU3aoW3x0VTDCxwoJOTwAO/voFbrdGa+EQlJJXBZTKQqo3PHfk4HfRCop2SXZV5Eg7hsrjUOoRWAUDgTPtx0JzmrQ8niJEkZXlRHkD+OuluvdZTVtPSU0myKdiJABjeDxg/T+ejnT3TlvuiE1tY1JGOPEX4sk9gfID30vy0MdH1rBRxyeKsThS/qdd020tidp4aeLtczb7i0YXe6n9kW7Kff116tFPbEF1r7lFtNLTtsozJjdMx2jB88d8aD35Wq70Y4z8TMQNT+qYzJdUyAplCs5HqRz/DVXiABaUNWcFscQrRw1zWIVsZiRKSmRlQnBkRSd20eZz8RGmKzXSnuNODGy5PeIuCQfbQWjutGltorfWI2wF2AHG5G+FlJ+YPOhEfS8JkaWlri0SkcYyfx1FZWjgiziIwuPlGaSCpnqHjjhkMSfFIUXsPlrrLLMLqscavGAFVffOpvT9wNpSaOsjlcyKB4jcttAwM6kT3GCFYoqGIPTiQSOW8z38/fUniQn4mTngwmwlqBHuzGI12lc8t7nXiCnlgLBpZJR2CnsNLCRXS7Xd0pqholnkZgqyfdBPf8ADR3qi23KC2UZileQ06kzyhtrscYz8sDSX0lnZaeBk7Z/2PrNIP2us/6uo/vDrNJ/Tn8zu6N3W1sS2K1yirF3M+3w2b4955GP4689P19P1FA32uAPUwKPFUdpV8mHuOf4aVrfHEWk+308lSGAwQpYjHmNc7ZcTaL6KiAMIhJhkPBKeY1rsyOx2rieCle4brKKCokqqJpFqo5qSR45QCoQgMAMZ7j30TsNwprb0DRW2+083hyLPTOUXcMBiAfrkY1H6s6bkqYpbraKgqHTeyrxkeox/DROD7EnSC3WWtQLBGUcMc7mH7vz50yh3qQ+MZM8w3JiVrVsXUtJN8aqoUNgF1UYHA9gNSOnJZI6x4wfhIwR8hqNeK1bhWmoXK7gFCnuqj/b89d+m0Z6l5cjCqfxOtDShuNwwe5s/wBOXDrGSxzmbqilj3KkcbNOSTjkDaO/uwGPfTj+kn9pThU7pCSPnn/LVc2mRqjqKhV+YaaZd58gWPGf7OrD/SDxEzjJEkBUD/Xz1NrG3Wz2rffa0rGuqHpmo5ojvp3dBtZjjOccD89SErxJeGmnQPFCMbDxj5H11HtdOlytsEVQceBUKc+Y9PzGvZttQ0kkFLFJPKSWbYpJxnvpBAPrmZx4OYp1tSk91qaholRDLuEQ7Y440YpeoJ1tNXbYcRwVEgbZgEAe3oe3Og9zp/Dr3YqQkvxr9f8APWUuxZ1SUKYyw5z251YvQlNbZjRRxUIsdwjm2SGdCsSszBoJCOWHkQcDj20GsjCeiqo3/pFA4+Wu1BWLDIVl3SRBuVVsfgdFpqmyM5lpxMKhxgl0Cjt+8V7/AIaNPi2ZRTiuzdAtvmeluFFWpnFPOC6+qng/kdWVV9WdPT2qWkqKSWqkZcbWQLlu33vLjB40gWmiasr/AAoH+Nh8AHO725xoxN01cI8kRj5HII+pGPz0tlcZKCTX6Z35UcSHR1/2GaVoYUMUnBjYnAHpnz0uVVfNJeZq+M+HK8rOu0YC88AD00ZuFHWUcJL0su7suEJz+Gght9RF4ck0TokhwNwI5B0qiogliIuils9TrEhjuUErnLNyc+Wpl9l8OZZWGfg4z8/89RDHKaiKpYfs2laNf/aAT/8A1ojdaRKiKIzOVUg/Fntq3GaziaoUNpnAi29QzVbEM20E4BPkTnVi9JqgpYIC0KtMRzNwuCD5j3B1XVdRy0FWY5iCdu5WH7w9dN9FKHtVBtfbkhHP/uz/AAOp9oZSDMrgiM1oqqy5Vc8DS00SxKAEm7yJ54x6DnXKsWKnp3qVfCnmPHaTnHB0wXW30FJWXGupag+HFCkMj04y0TEAkg+fn+Okjw7nVp9jpkeemD+JtVeB3+L29dZK1jJxxJiBCFrvJoHaemi2ysMbmVWI+Wu9ddqy+FYZ5KjYDnEfbPvpcgq4nqTSrkyAdiMaYaWT9U5hqaUmRlD5344PbjRNuQZxBIxJf6gi/wCsh/tjWa1+toP+Trel+VfxBxLChuEEjs3hoOMqAANJHVvSVMYp6+3Sv9pZjM6M2Vwe4Gj/AD/9NT98jBGuipIFUSqVUE4PtoVcg5lbYYRAsfVdztlItKDHLEnCpKvKj0z6a53irW/GRQ32T9mZZo937Nznkr6EgAaL3XpCWaKSutWfE3EyUzgA59jpXutvrrZEjV0DRGTO0N5gHnVtY3kbZOBziCKkhH2Ku0qvbOdErL+xoZ5DxkgA6jQ0EtZE1Qc4LEbvlqTTsP1a8CEEo5Yjz7f5a16+DNzSHbz+JuxzPFfYjF4eXnHLLkDnGefrq5+tqJ5+nnlgwJIB4qeoIH+R1TNjAaop2A+Lxl3fPcNXtdX3WlwB98EY+msuxs2EzPyWZjKRsUDutayngEN+erB6LqGo3raokGGUoEULzlQdxz38xx7aTemIJmWqVEYggdh3Hcaeel4oY7KsVRwyzupHmDnS3sKDcIsjiVdVQLc7e+9ER4KmeGM9uN7FV+mdLSqqgxTIRIpOPLHtpw6ms7UUN9kEmXprsu4oeNkkYI4+egNFRy3u311WGUT2+NHkLHG9WOBk+o9dU1tnmHWdshQjsGIye3tqQYMBXYEDOM6722nD1DwVK7KhfvRyDbn8fXRF7aJHFNIPCYMSckYGqRiWKARmeLPUrbK6CspnJmhYMpPGDq5Yuraa529WeOJgV+Icd9Vb/wAHwNCXFaRntgAj+OuFMKmxSMYXjkDDb3/lpiMM8w6vGW+UtKKpojKrLTgqe6jtpd/SFcqCpszUqwxeMWxCMAsh/raW6a5Xq4N9mpUKDPO7hR88aH3ehqKFyKk+IzDIl/r/AC17UW4XIh6mxUG5eZFq41j6dt8w7LXyLn22L/ho/NZo7l064hIaRQR88jjQy4QL/wADtIo+GC4KcHyBRgfzI1M6Lu4hmaiqCQfunPp5HS9HYCCpi9HZlDWfcrusmlmmL1DMZFUJ8XcY8tFIKp/1WkYbGx92pv6QbSbbenkVf2VQN6kds+f+OhEcYKrubsO2uEYOJIU2viPHRd1/83cKaumkMMwXxFHJbLAZ9yDo45SWpe3WxpfsZjCpDNKI4yR3LHuWPzx6ar+4Q/qurhqaad3VlRnI42twdvy7c6Z7bUS3lGqcwRg52qrHe2ODxj89Z2oHTL1J7TkDA6gSutVzpL1UTz0rRRo5bO8cL2B75xpzertka1D3O3TSVrRD7LuYmIL5DvnH4653qKe928TmdBUU2yKOBV+KfyOT7e+oFTQ1dLWpDWGQSwosciFSwBxwd/bGPLXPNx1EMd3Bnf7f/wDiqL8DrNesn+tF/Z1mkbv2g7JYddLC8oktkrGMtiRTg+fcHUqWKFIcCXGCDlh30FS0yW9UlaYyp2wvwquPMjXqrqzWqu/aFCZ2I+RpXyBJb3HqSRgThcbbWXaqhp6SXwrcoLVRWTDOc8AfT/XGq76pQfaqW20yZYOxA79zgD8jqy6K3Q7UqKWeUKPi8Njk5zqvqSmmunW48FsYqcBvRVPP+vfWhoRk8xtIy3MNUNint/TziVFaQr29/PSba49tyMFShRah/D3BsBMnufbVpdUzx0tP4MZ4jXvnGdVRcZz47yKPiU7vkOOfz1q2bQs02VFXOe4futr/AFRfJYosmLxg6MOx5H5at3O+0q7AeTEenwjVS0HU1Ne6aloK/atVFhYajOMgeR1akMkQsRds48MZHqQO+oL6wDuElaoIePcULlLSxXiti8f7JlInQYGw/AMjHqONFOl/DuWQxcIx3x7R3C+Zz6jUWWxrcrrUVbxF/EWMKAc7QEXRy00sNBNGlETKyIV8Mdx/LUFjZEQT6Mq7rGWaGTqakqO8xpagE+ZDMuki0zzrBcoYVk8OaACYo2AqhvP2J402fpVeqp+oUVtqrV04WUKPvbXz/HXj9DgB6ylieH7QklFKphIBD8rjOfnqyvmvMHud7lc6S59MWGEwxSVsMLLNMceLgcAZ74PfvoLK8niB0nbPGfEG7XuupJaC/wBwjkABVz8Oc7cnjB8+NeO3bjSw7KeIs2Mp4M7LV1PnUtt8wq/56xjvXO9t3kxxxrkiu8qIgJZiAo9SdMdP0tVfa2pqsrHJHD48hzlUjOSGJ9OMaI3uOIXlc+4PprtUQ04ieKMMgwJYmI3/APqGp1RX1c9B4Fwt7YkHwP5ZA7gfhr105QUVyhhlqlbwwGd/DbHKn8xjPGivWtNJHV0EELl4zTSSDHHGRqh7WTFbexLma1MVt0RAkNOz/o+v6SEP4csbqfTtoBVxTM8FVAxjlWJSW99NHTqPN0P1MZsEMFIz7YH8tRKP7dPBLaYWEkJQS7FI278DAY9+2kBsHiTH44x6gu93mnuvTrw1kpFZCy+EmM5+X0zoBGw2Zxrd3jEdw2Ar5Z2nI1uJAUX1J5+WrNxfmP37zkxkgpPHomcxh4YwPEOPhXPkdF+kIWW5GJshBGxTPbHt9dLX2o09juFGWINTN3yecKPy1Otd2p0loo6WZt0aCORnPC/I+mo/HlWOZMqAhmJ6nGydQvbr7UTRjxYZJXKxSAEbsnkeQONXNRVNB1fYfHp2j3MNknw8o3nqirZHSzVVdQl1Yh2aCoA5JB4I0Y6eu1X0hckq423RVO4yxBjtZd2Ccf1hjjR2UgIGnrqh4wwlj/8AAx/6iL8TrNcv/Emw/wBat/uj/jrepPH+0nxBvTvUDwOYrqZEV4giFsleO3H112r4qyjqvFp2eo8xuwi4PtoN091HQ0jiOuVpKZSAiOobac9x6Aeene+1VJ+pnrqOpABQvE8ZA3Ec40hqt0E8czSVC01G1ZIgVzC3wFhleDx+P8dKvRVEyJNcWyHJMYz3yDz/AC/DXm4XCBunjc2Cgzsu142++MZPH00Rt0s0Fveno4o2LASo7vtChhuyfxOtHR4rGWmlpiv2MDdYXTfOKSLJlc7SfU+mlyvoKak6lt1O0viQGNBMf+853Y069O0cdLLJXSvFUySEqZyMhOeQM9s+uh91MVT+ka3iIiSOJVDMpyM4Jx+Y0Nup8rcepy2zySbH0v0+fDrlt0bZI27nYKeeMjTVdbhJQWdKqOkSWnWMboIhg+5B7YAwe2tikp3ZXnP7FSXb3A51MpWNwshr5IwgqE3JERkRxeQ+vcn11NWS3JMUoIJzAE1dNJQQeAiRSTqixg/GFBHPfg4A9NS/2z04ip61I5olAjjbkN7EdhrVnpxUyK5+5DEsMTAfvZO/5n7o+mpVyNLRVcEMvhySt8RYfCUAHJz56B1P8RbA+oldX0LXG5UdRcqCGSSKGaJoydoyYywb6FR+Ogn6GY/D64DDhFo5Mt6ZK6Z+vqqlllszRyoxFaqOyNyVkBQ59udd+lOkIbKJ56uaKomkwMoDs2Lzj3Pn+WnJYFqxmdDYHPcV+uaOep64CRxiNpgFUH97bkZ+uNJdyqZFLxR5SReDnVp9SOn/AIj2BqdgU2si7R2GG/x0j/pJs72rqGeVQDT1i+LGy9gf3hn1z/HR0kEgGBwW5lldJw2ym6foJ6ek2yVECPNKyBmLEdsnsPlpX/SDW3E3laOgjfxbjSxwlV7sFYnv6c6cejICejbe7EgpCuEx2bQu7gU/WNsnrZEixRTfH8ivf30hWKuSZzJz+0QKHqEWuNraY5AY2dGeMgnPKtx+Oi0tZN+sK01ZVzTU7KhDZ+/jB/DQmGnplu9bNhZHNYXhJHAG/P56PdV2wW96ir4X7WWKoo7DauP560HO51LfiXszEoWM9dCMX6Z6ohcjEZ7+2dQ7GLbSXG5TXiilmiaJXhCEjc3Pp68an/o4jeoouqIIlDSSR5VB3bPb+GpHRlYJRWzuIoacxLAAvJaRuRgams43CKYDacxDvkMDxpPHlZt7SGPyVD2UepGobJ4bKxO3ceM6ZrjaLlLbQ1HSbfiJqKiZgMeQAHp5nUDqC0VlDVrSVlTFUTbQpMabQpI7e/z0+uxQgGYtXCj94PuxQw0jooG5TlgfvHGothOKkORkKc6N3O3TRWuChaEGpinZCc428Z/hrVhtYehlq43VUhheVsjvjH8c65kbMwTwMwNJLK9Y0yHDNJtG0Yxpuvtveq6WsNZTQOSIZkldRnkP3Op/SvR8M1Ql0q/Ckp5ImenjHO6THY/nxr1W3u62zpZorcqRCOqkE48MEIDzjHpoWs3YUTxJIxEHEnqdb1v9b3D/AJ6f3Y1mmYM5iWzfrZRSXJqQU6Roix4aMYbHPGdBaqGMdDzJtBBqygJ52gYPHprNZrPWI9xVFVKlqhtxbfShzN4b8jcSBq0KbbjaqKqGGNNq9gpXGNZrNNzxKaeoOs1JHTdQPSoztD4J+FznQ64QR2/rWnekQR70VyoHGcEZxrWs0mvswl6/mN00rzIkTsdhzkDz589M6Kq2eONQAqwAADyAA1ms0VUMe4NskaR0cIRRwM59SeTpZurvVVTzyu3iLMY1IPYDWazXrfoYo9GRP0hwxL0xSziNfFRomDY5zuGjrVEzVE5MrZjUkHA1ms0DfQRUU6uoep64pWkCho4HIKjGTsfk++vHWkn22a3WmdFNKiqwHnnHrrWs0WcETnsRwtVVLLP+r3IMCIxGBg8AY0uXWpllv9GztlkpqgA/QazWaAdwx3OfTFupavqq7yzxBiqRhV8hvA3HHrqX+kZyaCGPgLE6KgA7DtrNZqoH5rGA/ODP0Vyul1u6q2B9mjP1BOunTEMcd1liiUJGtUW2LwPhAA/I63rNDqezO29Q9dp3SnqCMYkhkBXyHwntqL1rbKak6Sa4QqftReOQyNyS2dZrNIQ9Sb3E28SPV08pqXLkyISTwTlPbWWyeRen7qu7Iam2nPoMYH5a1rNVn+3HnqSOmJpY5EKSMBBtlRc8bs4zj5E6YKVRLYupEYDa6knHqQdZrNLH2gp9ZSm9v6x1ms1mrIc//9k='); background-size: cover; margin-top: 20px;">
  <h1 class=" ml-1">Terong </h1>
  <h5 class="fw-bold ml-1">Lokasi Tanaman: {{ $d->alamat }}</h5><br>
  <div class="d-flex">
  <div>
    <button type="button" class="btn btn-warning mt-4 mr-2 ml-2 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$d->id}}" class="fw-bold text-white"> Lihat Detail Tanaman</button>
  </div>
  <form action="/delete/{{$d->id}}" method="post">
  @csrf
  @method('DELETE')
    <button type="submit" class="btn btn-danger mt-4">
      <span class="fw-bold text-white"> Delete</span>
    </button>
  </form>
  </div>
</div>
@endforeach
@foreach($tanaman as $d)
<div class="modal fade" id="exampleModal-{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Tanaman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container mb-5 mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded">
                        <div class="card-body">
                            <hr>
                            <div class="">
                                <div class="">
                                    <div class="floating">
                                    <label for="inputusername">Jenis Tanaman</label>
                                    @if($d->tanaman == 'jagung')
                                        <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Jagung" readonly/>
                                    @elseif($d->tanaman == 'terong')
                                    <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Terong" readonly/>
                                    @else
                                    <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Cabai" readonly/>
                                    @endif
                                    </div>
                                    <div class="floating">
                                    <label for="exampleInputEmail1">Lokasi Tanaman</label>
                                    <textarea type="text" class="form-control" name="tgl_peminjaman" value="" readonly>{{ $d -> alamat }}</textarea>
                                    </div> 
                                    <div class="floating">  
                                        <label for="exampleInputEmail1">Tanggal Tanam</label>
                                        <input type="text" class="form-control" name="tgl_peminjaman" value="{{ $d -> tglTanam }}" readonly>
                                    </div>
                                    <div class="floating">  
                                        <label for="exampleInputEmail1">Tanggal Panen</label>
                                        <input type="text" class="form-control" value="{{ $d -> tglPanen }}" name="tgl_pengembalian" readonly>
                                    </div>
                                </div>
                            </div>
                            <hr>                      
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach

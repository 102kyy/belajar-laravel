<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- NAVBAR -->
    @include('layouts.navbar')
    <!-- /NAVBAR -->

    <!-- content -->
    <div class="section">
        <div class="container">
            <!-- row 1 -->
            <div class="row mt-5">
                <center><h2>List Produk</h2></center>
            </div>
            <!-- row 2 -->
            <div class="row mt-5">
                @foreach ($mereks as $data)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIREQ8QEQ8VEBIQFRAWEA8WDw8VEBIWFRUWFhURFRcYHSggGBomGxUVIjEhJSkrLzoxFx8/ODM4NygwLysBCgoKDg0NDxAPFSsZFRkrKystLSs3Nys3KysrLSsrLS0tKystKysrKzctKystKysrNys3Ky0rKystLS0rLTctLf/AABEIAPcAzAMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQIDBAUGB//EAEcQAAICAQEGAgQKCAMGBwAAAAECAAMRBAUSITFBUWFxE1KBkQYiIzIzQmJygpIUU2OhscHR8BU04UODk6KywkRUVXN0s8P/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAXEQEBAQEAAAAAAAAAAAAAAAAAAREC/9oADAMBAAIRAxEAPwD7jERAREQEREBERAREQEREBERAREq7gAkkADiSTgAdyYFonP8A8Qaz6CvfH61yUq/CcFn8wMeMh9NYeNmpYfZrVa0953m9zCB0YnI0Tbl4rV3ZHrdiGssswysoBBckjO8eGcfFnXgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiYtVqFrRnbkvYZJ6BQOpJwAO5gU1mrWsAkFmY4SteLu3qqP35PAAEngJqDTFyH1GHYYK0DjTX2Jz89vtHtwA6zpaWybbPpXGMZyKk5ipf3EnqfAADIzSC73Hymvc0vNfUWqoLMd1VBZ2PIKoyxPsEDHsv42qvPSqumvyY71jfueudycf4MVt6E2uMPezWsDzXfOVQ/dXdX8M7EoREQEREBERAREQEREBERAREQEREBERATm2H0t+OaabBI6NcwyAfuqQfNx1Wb2pvFaPYxwqKzMfBRk/wmns6opUu/wdsvZ99zvMPIE4HgBAy2tMUM47zBfq0QZLYmRldsTjbRJusTSL9fdfUH1agfiofF2H5VbuJTaG2CoXdTee36Cnk1n229SodW68hxInW+DuyzSrO537rTvW2EcWY/wAAAA6AAdJYOtWmAAOktEShERAREQEREBERAREQEREBETUt2pQp3WvrDeqbE3vdnMDbiaJ2xp+t9Y83AH75safVV2DKWK47q6sP3QM0REDlfCa7d05+29KEdCGsXeH5czm6v4SJjGMHr8bP8p0/hHUWqBVA5R0fcJwGCniuehIzx74nk0tJOKNlqD691zvg/cwQfzCS6NlNo3XHFNZbu31R5k8BNP9Jy+7VjWX8t7idHSftMPpWHqrw4HJE6KbA1OpAGru+T/wDLoPR0eRQcWHgxael2fsyulQqKBjwknI52wthejJuuY23vjfsbGTjkBjgAOgHATvQTNOzatCndN9Yb1fSJve7OZobkTR/xan1z5+jsx78S1e1KGO6L694/V31De48YG5ERAREQEREBERAREw6vUrUu83gAAMsxPJVHUntAyWWBQWYhVAyWJAAHck8po/pdlv0CYX9fYGCnxRODP5ndHHgTFOkawizUAZBBrozmuvHIt0d/HkOnc7jP2gaZ2ah+mZrz6rn5Py9GuFI8wT4zZrAUbqKFA5AAAe4REC2+ZrX6Otzl6kc9CUUsPEHmJniBp/ojJxqtdPssWtrPmGO8PwsBLJtIrwurK/tEzZV7cDeT8QA8ZtSpUH+vWBlpuSxQyMrqeTKQyn2iWCAdAJz7dnVsSxUbx5uMrYfxrhv3yo2ZV9av0nhY9lg91hIgZn2omStYN7DgVrAIB7M5IVT4EgypS9/nOtC9kAez87jdHlunzmwDgAAAAcgOAEoYGu2gp+upvPe1mcZ7hW+KvsAmZX3RhQEHYKAIMgwJNrd5V23hhsMDzBAIPvmvfq0TgW4+qOJms+sc/NTdHdufuEDYXSIv0e9Qf2Rwn/DOUPnjMvXtMpn0pVkHO+v5q/8AupklPvZI4HJE5dmW+cxbw5L7hIrYoQV+KR1H98ZNXHqVOQCDkHkehkzz+i1Br41rledmnA5DrZQO/evrzHHg3dptV1V1YMrAFWByCDyIlReIiAiIgY77lRWdzuqoJY9gJqaKhnb09ow2D6Ks/wCxU9/tnqenIciTWz5a7c/2enKs/ZreDIv4RhvNk7TdsbpAh2zKxEBERAREQEREBESGIAyTgDmekAZRjjieAHXpNK3aOSVqX0h9bkgmI6Ytxtff+wOCCQZLNoDOK1Nh8OCjzMwOLH+e+B6i8PeZsboAwBgdhylGhWBawvIY/j75VplaY2kGNpjMyNKYkVUEggjgRyPWdTZ1m5d6PgDajW2Vfq23gA+Pq+kyxx3RjzJnCt1jlzRpQGuBxbqCA1enPVEHJ7R16A88kETvbB2MNOGJJeyw71ljEl3buxPM8vdNSI68REqEw6zUCqt7DxCKTgczgch4nlM05+0vjvp6fWf0jj7NOGB/4hq98DJoKDXUqtxdstYe7sd5yPDJIHgB2mWSxzIgIiICIiAiIgIlLrVQFmOAOs5T6qy8la/iJ1bqf77CBt6vaKod1Rvv6o7+J/lNYaZ7PjXNw6VjkPP+/bNjS6Rax8UcerHmf6CZ5BjVAowAAOwkGXMoZRjaY2mRpjaRWNpjaZGmNpBjM1NWzsyaeklbbRl7AcGmrJG+OzsQQp6AMeYE3OHEsd1VBZ26Kqglm9wM2vgxpDuNqLFxZqDvleqAgBK/woFX2SwbuyNl16etURQAABwE34iVCIiAnOQ72puPSqqtVPYuzM49y1zozl7PPx9Ye94A8lpqGPeD74G4JMiTAREQEREBNbW61ahx4k8l6n+gmLaO0BWMDi56dB4n+k09Hoix9JbxJ4hT18T4eEgrVQ95Flhwv1V5Z8uw8Z01UAAAYA5AcpaJQkGTKmBBlDLGUMCjTG0u0xtIqjTG0u0xtIMWtr3qinW96qfNWYNaPbWrD2z1Fa4AHacL0eW0I/a22flrdP8AvnfliEREoREQE5Wzf/Ef/Is/6VnVnH2aeOrHq6hv31Vt/wB0DfEmUEtAtEiIEznbV2kKhurxc+5R3Pj4RtjaYpXA42N80dh6xnN2RoS59NZxzxUHr9s/y/vMGfZuhJ+Vs4k8VU/9Tf0nViJQiRBMATKkwTKkwIJlCZJMoTIqGMxsZZjMbGBVjMbSxMoTIN4D5TQnwvHtKg/yM7M4jt8TR2ZwK7gG8nD1AfmsSduaQiIgIiICcfScLtand6bPz1iv/wDKdicewbusPD6eg5PjS4Kj3Wv7jA3AZOZTMnMC+ZqbU2gtCFjxJ4IvrH+neZdRetas7nCqMk/31njRY+uvJOVQf8iZ4AfaP8fASWjc2VpW1Dm63iuev1yOn3Rw/h5emEw01hVCqMAAAAcgB0mTMQXzIzK5jMotmVJkZlSYFiZQmCZQmQSTKEwTKEwqCZQmSTKEyCpMoTJJlSYVu6RPS1XUZ3SwJRvVbo3sYKZ1dn6n0taPjdJGHXqrg4dD4hgR7J5/T3FGVh06dx1E6qWCq0OD8jqSOPRLcADyDgAfeHdpYldOIiVCIiAnI298RtLf+quQN92zNTE+A3978M681NraQXU21Hk6sPHiMQKMMEjtAmps3VG2mqxvnld23sLEJSwDw3lM5fws2x+j1bqnFtuQvdV+s/8AIeJ8IHJ+E+1TfaNNV8ZVbGB9ezl7hy9/hO/sjQimsKOJ5s3rN1Pl0Hh5zgfBDZ2B6dhxYEVjsvJn9vEDwz3nqAZmKy5k5mLMnMoyZkZlMyMwL5kEyuZUmBYmVJkEypMCSZQmQTKkyATKEwTKkwIJlSYJkGRUGbmi1C4aq0b1b5BHbP8ACacQju6TUNWy02tvZ+huOMWjGd1ugsA94GR1C9Geap1I3TXYvpKzzXqOOQVPQg8R4jhib2m15QfGY3VDlaBm2sdrVHEj7YHmBjJ1KjrxKVWKwDKwZWGVYEEEdwRzl5QiIgecSwae/U1ud2t1OoRjnAKALcPDhuNj708IrttDVlmyEPE90qXko8TkDzae8+G+zTdpyyDNlXxlHfA+MntUke2cP4L7OFVIfmdQFsB/Zn6Me4k+0dpmrHcrAAAAAAAAA5AAYCjwAwJfMxAycwMu9JzMWYzAy5kb0x5jMC+ZBMpmRmBcmVJlSZUmBYmVJkEypMCSZUmQTIJkUJkREBERATZ2ccOGJ3VQMzt2UDiTNaX1VfyAqHztY61f7sZa0nwKhl82WIjs/B4k6etmG61m9Yy+qbWNhX2FsTpStSYAHYS02hERAq65BB6zy2lqNb26Q/U3rdP41s3ylf4XOfJwBynq5xfhHo3KpfV9Np236+gbAIZD4MpKnzgaOZOZBsV1S6v6O0ZUHmpBw1bDoykEEeB7SuZlWTMZmPMnMC+YzKZjMC2YzKZkZhV8ypMjMjMgkmQTIzIgMxEQEREBERAvRUXZVHMn3dzNvZyi7VPaPotMDRT4kEemcfiUL/u/Ga+qdqKhuf5jUn0dHXczxa0/dGT2zuj607mydCtFSVKMBQB7pqRG5ERKhERASCM8JMQPK3oNJeyv/ldUw3j0ouPBbPBW4A9junkWMvqaChIPvne2holuratwGDAggjhxnnNn2sjDQ6g5YAjS3MfpUHH0LE87FA4HmQO4JksDMZmTUacrnt+8ecwzKrZjMrEKnMZkRAZiQWkb8Yi0SoaWhSIiAiJKKTwECBN/R6YAGywhVQFnYkBVAGSSfLrL6HRZ/m3QeAmjqn/TbP0ar/LUt8vYOVzqfoweqKRx7kY5A51IjY2Ih1Nrax1Krjc0yEEFKue8QeTMfjH8I+rPRSlVYUBRyEvKhERAREQEREBObtzZKamsqwwRgqwJDKQchlI4gggEEdp0ogeW2dtM740usO7fyp1GAE1A6A9Fs7ryPNeqrt6rZxHED+n+k3tr7Ir1KFLFByOoBnnx+n6PghGrqHKu0t6QDoFtGTj7waBkNTdj7pK0sekL8MK+VuivRupCUuvsO9n3gSW+GSnhVor2PQkUontO+T/yyYusi6Q/6CRrFroAa+1KQfm77DebwVebHwE1Vt2hqOCqmiQ89wb9viPSOMY8lB8ZubO+CNSEvZm2w43rHZndvvM2SfaZcRy/8dozirT6jUdn3FqrPschx+WWG23/APSuHf8ASWz/APX/ADnr6tHWvAIB7Jm9GOw90DxQ2/p+Vuk1Gn7uFWxB7FJc/lnQ0XoL8/o+oS4jiyA4sX7yHivtxPQW6OtuaA+ycTaXwRotwwXdZeKsODKe6kcQfKBDaMjgQRKnSfa/dNM6XaGm4JcNTWMfJ3qbDjwfIfPixbyl6vhW9Yxbs6wH9lZW4Pj8puSYNuvRZPMnwAnRo0IUZchVHE8eg5kmcU/C6x+FGz7Mn9bZWgHj8nv58pRdkarWEHWW/J5BGnQFKeHLeGSXPL5xIyMgCXBfV7SfWn9H0ZKaflbqhkGwdUpPRT6/5fWnodmaBKK1rRQoUAAAYHDpMmk0iVKFQYAmeAiIgIiICIiAiIgIiICQRJiBhfSoeaA+yE0qDkgHskxAyASYiAiIgIiICY2pU81B9kRAlaVHJQPZLxEBERAREQERED//2Q==" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_merek }}</h5>
                            <a href="{{ url('mereks/' . $data->id) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /content -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- /footer -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>

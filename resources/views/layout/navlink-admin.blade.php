						<li class="nav-item">
							<a class="nav-link" href="{{route('dashboard.index')}}">Dashboard <span class="sr-only"></span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{route('courseList.index')}}">Course<span class="sr-only"></span></a>
						</li>

						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">Approve</a>

							<div aria-labelledby="navbarDropdown" class="dropdown-menu">
								<a class="dropdown-item" href="{{route('approveTeacher.index')}}">Teacher Account</a> 
								<a class="dropdown-item" href="{{route('approveStudent.index')}}">Student Account</a>	
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{route('payment.modify')}}">Payment<span class="sr-only"></span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{route('salary.index')}}">Salary<span class="sr-only"></span></a>
						</li>
						
						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">Report</a>

							<div aria-labelledby="navbarDropdown" class="dropdown-menu">
								<a class="dropdown-item" href="{{route('report.courses')}}">Popular Courses</a> 
								<a class="dropdown-item" href="{{route('report.historyGet')}}">Student History</a>	
								<a class="dropdown-item" href="{{route('report.gradesGet')}}">Good Grades</a>	
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{route('contact.index')}}">Contact <span class="sr-only">(current)</span></a>
						</li>
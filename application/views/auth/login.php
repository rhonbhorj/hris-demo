<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login Template</title>
	<link class="js-stylesheet" href="/assets/css/light.css" rel="stylesheet" />
	<style>
		/* Animation Keyframes */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}
			to {
				opacity: 1;
			}
		}

		@keyframes scaleIn {
			from {
				opacity: 0;
				transform: scale(0.9);
			}
			to {
				opacity: 1;
				transform: scale(1);
			}
		}

		@keyframes slideInLeft {
			from {
				opacity: 0;
				transform: translateX(-30px);
			}
			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		/* Animation Classes */
		.animate-fade-in-up {
			animation: fadeInUp 0.8s ease-out forwards;
			opacity: 0;
		}

		.animate-fade-in {
			animation: fadeIn 1s ease-out forwards;
			opacity: 0;
		}

		.animate-scale-in {
			animation: scaleIn 0.6s ease-out forwards;
			opacity: 0;
		}

		.animate-slide-in-left {
			animation: slideInLeft 0.7s ease-out forwards;
			opacity: 0;
		}

		/* Staggered Animation Delays */
		.delay-1 {
			animation-delay: 0.1s;
		}

		.delay-2 {
			animation-delay: 0.2s;
		}

		.delay-3 {
			animation-delay: 0.3s;
		}

		.delay-4 {
			animation-delay: 0.4s;
		}

		.delay-5 {
			animation-delay: 0.5s;
		}

		.delay-6 {
			animation-delay: 0.6s;
		}

		/* Alert animation */
		.alert-message {
			animation: slideInLeft 0.5s ease-out forwards, 
					  fadeIn 0.5s ease-out forwards;
			opacity: 0;
			transform: translateX(-20px);
		}

		/* Button hover animation */
		.btn-primary {
			transition: all 0.3s ease;
		}

		.btn-primary:hover {
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		}

		/* Input focus animation */
		.form-control-lg:focus {
			transform: translateY(-1px);
			transition: all 0.3s ease;
		}
	</style>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<main class="d-flex w-100 h-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="text-center mt-4 animate-fade-in">
							<img class="img-fluid animate-scale-in" src="/assets/img/kw_logo_wh.png" width="140" 
								 style="animation-delay: 0.2s;">
							<h1 class="h2 animate-fade-in-up delay-2">Welcome back!</h1>
							<p class="lead animate-fade-in-up delay-3">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card animate-scale-in delay-4">
							<div class="card-body">
								<!-- <div class="alert alert-dismissible alert-message" role="alert" 
									 style="animation-delay: 0.5s;">
									<div class="alert-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<circle cx="12" cy="12" r="10"></circle>
											<line x1="12" y1="8" x2="12" y2="12"></line>
											<line x1="12" y1="16" x2="12.01" y2="16"></line>
										</svg>
									</div>
									<div class="alert-content">
										<div class="alert-title">Invalid credentials</div>
										<div class="alert-text">Wrong username or password. Please try again.</div>
									</div>
									<button type="button" class="alert-close" data-bs-dismiss="alert" aria-label="Close">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<line x1="18" y1="6" x2="6" y2="18"></line>
											<line x1="6" y1="6" x2="18" y2="18"></line>
										</svg>
									</button>
								</div> -->
								<div class="m-sm-3">
									<form>
										<div class="mb-3 animate-fade-in-up delay-5">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" />
										</div>
										<div class="mb-3 animate-fade-in-up delay-6">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>

										<div class="d-grid gap-2 mt-3 animate-fade-in-up" style="animation-delay: 0.7s;">
											<a class='btn btn-lg btn-primary' href='/'>Sign in</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			setTimeout(() => {
				const animatedElements = document.querySelectorAll('[class*="animate-"]');
				animatedElements.forEach(element => {
					const currentOpacity = window.getComputedStyle(element).opacity;
					if (currentOpacity === '0') {
						void element.offsetWidth;
					}
				});
			}, 100);

			const inputs = document.querySelectorAll('.form-control-lg');
			inputs.forEach(input => {
				input.addEventListener('focus', function() {
					this.parentElement.style.transform = 'translateY(-2px)';
					this.parentElement.style.transition = 'transform 0.3s ease';
				});

				input.addEventListener('blur', function() {
					this.parentElement.style.transform = 'translateY(0)';
				});
			});
			const alertCloseBtn = document.querySelector('.alert-close');
			if (alertCloseBtn) {
				alertCloseBtn.addEventListener('click', function() {
					const alert = this.closest('.alert-message');
					alert.style.animation = 'fadeIn 0.3s ease-out reverse forwards';
					setTimeout(() => {
						alert.style.display = 'none';
					}, 300);
				});
			}
		});
	</script>
</body>

</html>
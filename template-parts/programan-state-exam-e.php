<section class="slider responsive9 fade-in-top">
	<div class="item active">
		<div class="c-block">
			<h4>Emergency ACT/SAT Course</h4>
			<h4 class="precio">250</h4>
			<p class="mt-4 mb-4">
				Need a last-minute boost? Our certified tutors deliver expert tips, tricks, focused lessons, and practice
				to maximize your score fast.
			</p>
			<h4 class="det mt-3 mb-3">Valid for one month</h4>
			<ul class="fa-bullets">
				<li>6 one-on-one tutoring hours</li>
				<li>ACT and SAT Expert Tutors</li>
				<li>Personalized Approach</li>
				<li>Comprehensive Curriculum</li>
				<li>10 Full Length Practice Exams</li>
				<li>Strategic Test- Taking Techniques</li>
			</ul>
			<a href="<?php echo get_permalink(71) ?>" class="btn-1 mt-4">
				Select <i class="fa-solid fa-circle-arrow-right"></i>
			</a>
		</div>
	</div>

	<div class="item active">
		<div class="c-block">
			<h4>Intensive ACT/SAT Course</h4>
			<h4 class="precio">420</h4>
			<p class="mt-4 mb-4">
				Need a last-minute boost? Our certified tutors deliver expert tips, tricks, focused lessons, and practice
				to maximize your score fast.
			</p>
			<h4 class="det mt-3 mb-3">Valid for one month</h4>
			<ul class="fa-bullets">
				<li>12 one-on-one tutoring hours to use within 3 months</li>
				<li>ACT and SAT Expert Tutors</li>
				<li>Personalized Approach</li>
				<li>Comprehensive Curriculum</li>
				<li>10 Full Length Practice Exams</li>
				<li>Strategic Test- Taking Techniques</li>
			</ul>
			<a href="<?php echo get_permalink(73) ?>" class="btn-1 mt-4">
				Select <i class="fa-solid fa-circle-arrow-right"></i>
			</a>
		</div>
	</div>

	<div class="item active">
		<div class="c-block premium">
			<div class="premium-badge">NEW!</div>

			<h4 class="premium-title">PREMIUM ACT/SAT Course</h4>

			<div class="premium-price-area">
				<div class="premium-launch color-white">Launch<br>Special</div>

				<div class="premium-prices">
					<div class="premium-current">
						<span class="currency">$</span><span class="amount precio_oferta">536</span>
					</div>

					<!-- <div class="premium-old">
						<span class="currency">$</span><span class="amount">670</span>
					</div> -->
				</div>
			</div>
			<div class="premium-price-area">
				<div class="premium-prices">

					<div class="premium-old">
						<span class="currency">$</span><span class="amount precio_old">670</span>
					</div>
				</div>
			</div>

			<p class="mt-4 mb-4 premium-desc">
				Our Premium Plan gives students a strategic advantage: prepare for both SAT and ACT with personalized 1:1
				tutoring and total flexibility to submit their strongest test score with confidence.
			</p>

			<div class="premium-exp color-verde">No expiration</div>

			<ul class="premium-list">
				<li>18 one-on-one tutoring hours</li>
				<li>ACT and SAT Expert Tutors</li>
				<li>Personalized Approach</li>
				<li>Comprehensive Curriculum</li>
				<li>
					16 Full Length Practice Exams
					<div class="premium-subline">– 10 SAT, 6 ACT</div>
				</li>
				<li>Strategic Test- Taking Techniques</li>
			</ul>

			<a href="<?php echo get_permalink(445) ?>" class="btn-1 mt-4 premium-btn">
				Select <i class="fa-solid fa-circle-arrow-right"></i>
			</a>
		</div>
	</div>
</section>

<style>
/* =========================
   PREMIUM CARD (3er bloque)
   ========================= */
.c-block.premium{
	position: relative;
	border: 2px solid #7CFF00;
	border-radius: 18px;
	padding: 28px 18px 18px;
	text-align: center;
	overflow: visible;
}

/* Badge NEW! */
.c-block.premium .premium-badge{
	position: absolute;
	top: -14px;
	left: 50%;
	transform: translateX(-50%);
	background: #a4ff48;
	color: #000;
	font-weight: 900;
	font-size: 12px;
	letter-spacing: .6px;
	padding: 6px 14px;
	border-radius: 12px;
	text-transform: uppercase;
	z-index: 30;
}

.c-block.premium .premium-title{
	text-transform: uppercase;
	font-weight: 900;
	letter-spacing: .3px;
	margin: 10px 0 12px;
}

/* Launch + precios */
.c-block.premium .premium-price-area{
	display: flex;
	align-items: flex-start;
	justify-content: center;
	gap: 14px;
	margin-bottom: 10px;

	/* importante para que z-index funcione dentro */
	position: relative;
	z-index: 5;
}

.c-block.premium .premium-launch{
	text-align: left;
	font-size: 12px;
	line-height: 1.05;
	font-weight: 800;
	opacity: .95;
	margin-top: 6px;
}

.c-block.premium .premium-prices{
	display: flex;
	flex-direction: column;
	align-items: center;
	line-height: 1;
	position: relative;
}

/* PRECIO ACTUAL: siempre arriba */
.c-block.premium .premium-current{
	position: relative;
	z-index: 20;
	font-size: 56px;
	font-weight: 900;
	letter-spacing: .2px;
	line-height: 1;
}

/* PRECIO VIEJO: contenedor propio para que el :after NO se suba */
.c-block.premium .premium-old{
	position: relative;
	z-index: 10;             /* por debajo del 536 */
	display: inline-block;    /* limita el ancho del tachado al texto */
	width: fit-content;       /* evita que el tachado se haga gigante */
	margin-top: 8px;
	font-size: 20px;
	font-weight: 800;
	line-height: 1;
	opacity: .95;
	padding: 0 2px;           /* pequeño margen para que no corte el tachado */
}

/* $ */
.c-block.premium .currency{
	margin-right: 2px;
	font-size: 1em;
	font-weight: inherit;
}

/* Asegurar visibilidad */
.c-block.premium .premium-current,
.c-block.premium .premium-old,
.c-block.premium .currency,
.c-block.premium .amount{
	display: inline-block !important;
	visibility: visible !important;
	opacity: 1 !important;
	color: #fff !important;
	filter: none !important;
	-webkit-text-fill-color: #fff !important;
}

/* Tachado morado SOLO sobre el 670 */
.c-block.premium .premium-old:after{
	content: "";
	position: absolute;
	left: -10px;
	right: -10px;

	/* más abajo para que no se coma el 536 */
	top: 55%;

	height: 3px;
	background: #8a3dff;
	border-radius: 999px;
	transform: rotate(-6deg);
	z-index: 11; /* encima del 670, pero sigue debajo del 536 */
	pointer-events: none;
}

/* Texto */
.c-block.premium .premium-desc{
	max-width: 320px;
	margin-left: auto;
	margin-right: auto;
	opacity: .95;
}

/* No expiration + línea */
.c-block.premium .premium-exp{
	font-weight: 900;
	margin: 10px 0 12px;
	position: relative;
}

.c-block.premium .premium-exp:after{
	content: "";
	display: block;
	width: 72%;
	max-width: 260px;
	height: 2px;
	margin: 10px auto 0;
	background: #7CFF00;
	opacity: .95;
	border-radius: 999px;
}

/* Lista checks */
.c-block.premium .premium-list{
	list-style: none;
	padding: 0;
	margin: 0 auto 10px;
	max-width: 330px;
	text-align: left;
}

.c-block.premium .premium-list li{
	position: relative;
	padding-left: 28px;
	margin: 12px 0;
}

.c-block.premium .premium-list li:before{
	content: "✓";
	position: absolute;
	left: 0;
	top: 2px;
	width: 18px;
	height: 18px;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	color: #7CFF00;
	font-weight: 900;
	border: 2px solid #7CFF00;
	border-radius: 999px;
	font-size: 12px;
	line-height: 1;
}

.c-block.premium .premium-subline{
	margin-top: 4px;
	font-weight: 700;
	opacity: .95;
	font-size: 12px;
}

/* Botón ancho */
.c-block.premium a.premium-btn.btn-1{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 8px;
	border-radius: 12px;
	padding: 14px 12px;
}

/* Mobile como tu captura */
@media (max-width: 520px){
	.c-block.premium{
		max-width: 360px;
		margin-left: auto;
		margin-right: auto;
		padding: 26px 16px 16px;
	}

	.c-block.premium .premium-title{
		font-size: 14px;
	}

	.c-block.premium .premium-current{
		font-size: 64px;
	}

	.c-block.premium .premium-old{
		font-size: 22px;
	}
}
.color-white{
	color: #fff;
}.color-verde {
	color: #7CFF00;
}









/* NUEVOS ESTILOS ELVIS */
.precio_oferta{
	    font-family: "Retroica";
    font-weight: 200;
    font-size: 4rem;
   }

   .precio_old{
	    font-size: 2rem;
    font-weight: 600;
   }
   .premium-badge{
    border-radius: 7px;
    min-width: 150px;
   }
   .premium-title{
	    margin-top: 10px;
   }
</style>
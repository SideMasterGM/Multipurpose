<?php
	$Info = new Company();

	$Info->company = 'Vazquez Painting and Remodeling';

	$Info->experience 	= '13 Years of Experience';
	$Info->estimates	= 'Free Estimates Are Available';
	$Info->services 	= 'Residential and Commercial Services';
	$Info->payment 		= 'We Accept Cash and Checks';

	$Info->schedule 		= 'Monday to Saturday from 7 a.m. to 6 p.m.';
	$Info->schedule_short	= 'Mon - Sat 7am to 6pm';

	$Info->address 		= 'Houston, TX';
	$Info->cover		= 'We Cover<br class="d-sm-none"> 80 Miles Around Houston';
	$Info->googlemap	= '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443087.54862369417!2d-95.68148741985043!3d29.817478217443124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b8b4488d8501%3A0xca0d02def365053b!2sHouston%2C+Texas%2C+EE.+UU.!5e0!3m2!1ses!2sni!4v1555512550406!5m2!1ses!2sni" class="googlemap" allowfullscreen></iframe>';
	
	$Info->license		= 'We Are Licensed';
	$Info->lic			= '';

	$Info->addPhone('(832) 845-6401');
	$Info->addPhone('(666) 666-6401');

	$Info->addEmail('contact@vazquezpaintingandremodeling.com');
	$Info->addEmail('israelsantos179@gmail.com');

	$Info->addPhrase('Where Your Walls Come Back to Life');
	$Info->addPhrase('Painting that Enhances Your Home’s Look and Feel');
	$Info->addPhrase('Painting Is Our Passion');
	$Info->addPhrase('Transform Your Space with the Best');
	$Info->addPhrase('Let Us Upgrade Your Home!');

	$Info->addHome('Make sure that all your walls and every room in your home reflect your style and preferences! With Vazquez Painting and Remodeling, the perfect look for your home or business is just a call away! We guarantee you that when you work with us, you’ll be completely satisfied with the results!.');
	$Info->addHome('As a completely licensed company, customers in the area trust us to always remain professional and responsible in every project we undertake. Our priority is that we meet your needs beyond your expectations. You can expect the best customer service and quality craftsmanship from our team!.');
	$Info->addHome('Vazquez Painting and Remodeling is an expert for both residential and commercial services. Call us if you ever need: ');
	$Info->addHome('1. Interior and Exterior Painting<br/>
				    2. Pressure Washing<br/>
				    3. Kitchen and Bathroom Remodeling<br/>
				    4. Drywall Repair<br/>
				    5. Texture Painting<br/>
				    6. Custom Painting<br/>
				    7. Hardwood Floors<br/>
				    8. Laminate Floors<br/>
				    9. Ceramic Tile<br/>');

	$Info->addAbout('For more than 13 years, Vazquez Painting and Remodeling has been serving customers in Houston, Texas and surrounding areas with outstanding solutions and quality craftsmanship. When you work with us, we guarantee you will have the best experience during your painting or remodeling project.');
	$Info->addAbout('Our company has maintained a reputation for always delivering the highest quality work and at affordable prices. We will be available during the whole project to answer any questions you might have. You can count on us all the time as we are very available and friendly.');
	$Info->addAbout('Vazquez Painting and Remodeling abides by the following values: ');
	$Info->addAbout('1. Quality work<br/>
					 2. Punctuality<br/>
					 3. Creativity<br/>
					 4. Diligence<br/>
					 5. Innovation');

	$Info->addService('Test', '¡Haciendo una prueba de esto!');
	$Info->addService('Interior and Exterior Painting', 'When you’re looking to add life to your faded walls, you need to turn to Vazquez Painting and Remodeling! We offer both interior and exterior painting so that you give your space the look that you’ve always wanted. Our crew uses the highest quality painting products to ensure we deliver the best results.');
	$Info->addService('Pressure Washing', 'Make sure that your home’s exterior is always in the best condition with help from Vazquez Painting and Remodeling. Our team will ensure to get rid of all dust, dirt, mold, or even loose paint with our professional pressure washing services. We have the skills and equipment to ensure that your outdoors look in the best shape all the time.');
	$Info->addService('Kitchen and Bathroom Remodeling', 'The kitchen and bathroom are two of the most important rooms in your home, and they should meet both your style and needs. Let the experts at Vazquez Painting and Remodeling help you achieve the look you’ve always wanted with our remodeling services. We guarantee you will love your new and beautiful bathroom and kitchen.');
	$Info->addService('Drywall Repair', 'Patch up those holes and fix those cracks in your walls with Vazquez Painting and Remodeling! Our company offers professional drywall repair services that will leave all your walls looking as good as new. We use top-of-the-line materials and tools so that we deliver the best results.');
	$Info->addService('Texture Painting', 'If you want to add a touch of style to your walls, then allow Vazquez Painting and Remodeling to help you! We are experts in texture painting and will ensure that all your walls look remarkable. Our team will work alongside you to understand what your needs are and deliver exactly that.');
	$Info->addService('Other services:', 
					  '1. Custom Painting<br/>
					  2. Hardwood Floors<br/>
					  3. Laminate Floors<br/>
					  4. Ceramic Tile<br/>
					  5. Granite Installation<br/>
					  6. Cabinet Installation and Repair<br/>
					  7. Siding Installation<br/>
					  8. Concrete Work<br/>
					  9. Roofing Installation and Repair<br/>
					  10. Framing');

	# addReviews(name, location, comment, stars)
	$Info->addReview('Josh V.', 
					  'Channelview, TX', 
					  "Vazquez Painting and Remodeling does an excellent job and reasonably priced. You definitely get way more than your moneys worth. They repainted my deck and my garage door at my home. It gave the deck and the entire backyard a completely new updated fresh look. I recommend this business to anyone who needs painting done the right way.", 
					  5);
	$Info->addReview('Lana Rigsby', 
					  'Vazquez Painting & Remodeling', 
					  "I love working with Israel Sanntos and his men. They are responsible, careful and thorough workers who always do more than whats asked of them. They are trustworthy in all regards. I recommend them without hesitation.", 
					  5);
	$Info->addReview('Yesi', 
					  'Cuba', 
					  "Hacen un maravilloso trabajo y un gran equipo. Lo recomiendo al 100.", 
					  5);

	# addLandingPage(title, link, paragraphs)
	$Info->addLanding('Flagstone Patios and Entryways', 
					  'flagstone-patios-and-entryways.php', 
					  ['Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, nisi, adipisci. Provident at dolorum similique! Provident accusantium, aliquam cumque, quod, praesentium at soluta cupiditate molestias dicta omnis porro totam ea.', 
					   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore porro repudiandae ducimus rem expedita sapiente, quae, atque iste quis beatae animi libero voluptatum sint doloribus voluptates maiores eligendi amet reprehenderit.', 
					   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laboriosam expedita error tempora, iure mollitia doloremque, ut repellat consequuntur quam fuga optio earum ratione autem! Velit in doloribus beatae ex!']);

	# addBlog(title,  autor_name, paragraph, date)
	$Info->addBlog('Blog Entry Title', 
				  'Jerson Martínez', 
				  ['Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, nisi, adipisci. Provident at dolorum similique! Provident accusantium, aliquam cumque, quod, praesentium at soluta cupiditate molestias dicta omnis porro totam ea.', 
				   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore porro repudiandae ducimus rem expedita sapiente, quae, atque iste quis beatae animi libero voluptatum sint doloribus voluptates maiores eligendi amet reprehenderit.', 
				   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laboriosam expedita error tempora, iure mollitia doloremque, ut repellat consequuntur quam fuga optio earum ratione autem! Velit in doloribus beatae ex!'], 
					'01/05/2019');

	# SOCIAL NETWORKS
	$Info->facebook			= '#';
	$Info->twitter			= '#';
	$Info->linkedin			= '#';
	$Info->googlemybusiness = '#';
	$Info->yelp				= 'https://www.yelp.com/biz/vazquez-painting-and-remodeling-houston';
	$Info->homeadvisor		= '#';
	$Info->buzzfile			= '#';
	$Info->businessfinder	= '#';
	$Info->manta			= '#';
	$Info->yellowbot		= '#';
	$Info->houzz			= '#';
	$Info->dexknow			= '#';

	#SEO
	$Info->why				= '';
	$Info->mission			= '';
 	$Info->vision			= '';
	$Info->domain 			= '';
	$Info->satisfaction		= '';
	$Info->locality			= '';
	$Info->region			= '';
	$Info->street_address	= '';
	$Info->bilingual		= '';
	$Info->seo_convert 		= $Info->getSEOPhone(1)['SEOConvert'];

	$color = ['dominant' => '', 'tonic' => '', 'mediation' => ''];
	// echo $Info->seo_convert;
	// echo $Info->getPhrase(3);
	// echo $Info->getHome(1, 15);
	// echo $Info->getAbout(2, 10);
	// echo $Info->getService(2, 30)['content'];
	// echo $Info->getReview(2, 10)['comment'];
	// echo $Info->getLanding(1, 2, 5)['p'];
	// echo $Info->getBlog(1, 2, 15)['p'];
	// echo $Info->getWords($Info->services, 20);
	// echo $Info->getEmail(1)['Email'];
	// echo $Info->getPhone(1)['PhoneRef'];
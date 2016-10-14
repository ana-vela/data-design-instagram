<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
			<title>Data Design Assignment - Instagram Profile and Post</title>
	</head>

	<body>
		<h1>Data Design Assignment</h1>
			<h2>Instagram Profile and Post</h2>

				<!-- start persona section -->
				<section>
				<h3>Persona</h3>
					<p>Name: McKenna Shutterfly</p>
					<p>Age: 26</p>
					<p>Profession: McKenna is a new freelance photographer in Albuquerque. She wants to share the photographs she has taken around the city and highlight her best photos from various gigs.</p>
					<p>Technology: McKenna invested in professional equipment for photography. She also uses her iPhone for photos when she sees a great photo opportunity and she doesn't have her professional equipment with her. It is much easier for her to post photos from her iPhone, so she chooses to upload from her iPhone more often than her regular camera.</p>
					<p>Attitudes and Behaviors: McKenna is still working full-time in retail, so she can only dedicate time to her photography when she is not working. She hopes to transition to photography full-time when she gets more consistent gigs.</p>
					<p>Frustations and Needs: She does not have a website yet, so Instagram is one of the various ways she is posting her work via social media to find more clients. She has a limited time to post photos, so she needs a quick way to get her work online.</p>
					<p>Goal: McKenna wants to post several of her most recent photos on Instagram. Since she is short on time, she will post photos from her iPhone. Since she loves Albuquerque, she wants to share many of the photos she has taken around town. This may help her create a sense of community with potential clients. Once she gets a website, she wants to add a link to her Instagram page so that potential clients can be directed to her official page.</p>
				</section>

				<!-- Start use case section -->
				<section>
					<h3>Use Case</h3>
					<p> McKenna recently created flyers and business cards to promote her photography work. She hopes that potential clients will visit her Instagram page to be able to preview her work and eventually hire her for an event or photo session.</p>
					<p>A few of McKenna's friends offered to post flyers and give out business cards for her. Her friends will also share and comment on her posts. McKenna wants to be ready with good examples of her work once more people beginning checking out her Instagram page. She will be uploading several photos with her iPhone.</p>
				</section>
				<!-- start entities section -->

				<section>
					<h3>Profile Entities</h3>
						<ul>
							<li>profileId: primary key </li>
							<li>profileByline: description of the profile </li>
							<li>profilePhoto: identifying image for profile</li>
							<li>profileName: name of profile</li>
							<li>profileEmail: email used to start account</li>
						</ul>
					<h3>Post Entities</h3>

						<ul>
							<li>postId: primary key for the post</li>
							<li>postProfileId: foreign key to profile</li>
							<li>postContent: the actual post</li>
							<li>postImage: image associated with post</li>
							<li>postDateTime: timestamp of post</li>
							<li>like: other users can indicate that they liked the particular post</li>
						</ul>
				</section>

		<!-- Start Interaction Flow -->

		<section>
			<h3>Interaction Flow</h3>
			<ol>
				<li>McKenna evaluates her photos taken during a visit to Old Town Albuquerque.</li>
				<li>After careful consideration, McKenna chooses five photos to upload on Instagram.</li>
				<li>She logs in to Instgram.</li>
				<li>Fer each post, she adds one photo, a caption, and several relevant hashtags.</li>
			</ol>
		</section>

			<!-- start relationship section -->

				<section>
					<h3>Relationships</h3>
							<h4>Profile Entity Relationships</h4>
								<h5>One to One</h5>
									<ul>
									<li>Each profile can have one profile id.</li>
									<li>Each profile can have one profile byline.</li>
									<li>Each profile can have one profile photo.</li>
									<li>Each profile can have one profile name.</li>
									<li>Each profile can have one email linked to their account.</li>
									</ul>
								<h5>One to Many</h5>
									<ul>
										<li>Each profile can have many posts.</li>
										<li>Each profile can have many images.</li>
									</ul>

								<h5>Many to Many</h5>
									<ul>
										<li>Many profiles can have many likes from other profiles.</li>
										<li>Many profiles can like many posts.</li>
									</ul>

							<h4>Post Entity Relationships</h4>
								<h5> One to One</h5>
									<ul>
										<li>Each post can have one post id.</li>
										<li>Each post can have one post profile id.</li>
										<li>Each post can have one date and time.</li>
										<li>Each post can have one image with text.</li>
									</ul>

								<h5>One to Many</h5>
									<ul>
										<li>Each post can have many likes.</li>
									</ul>

								<h5>Many to Many</h5>
									<ul>
										<li>Many posts can be liked by many profiles.</li>
									</ul>

				</section>
		</body>
	</html>
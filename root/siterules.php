<head>
	<title>Vermillion - Rules</title>
	<style>
		.tooltip {
			position: relative;
			display: inline-block;
			text-decoration: none;
			cursor: pointer;
		}

		.tooltip .tooltiptext {
			visibility: hidden;
			width: 150px;
			background-color: black;
			opacity: 0.85;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;
			position: absolute;
			z-index: 1;
			bottom: 150%;
			left: 50%;
			margin-left: -60px;
		}

		.tooltip .tooltiptext::after {
			content: "";
			position: absolute;
			top: 100%;
			left: 50%;
			margin-left: -5px;
			border-width: 5px;
			border-style: solid;
			border-color: black transparent transparent transparent;
		}

		.tooltip:hover .tooltiptext {
			visibility: visible;
		}
	</style>
	<style>
		.wrap {
			margin: auto;
			background-color: #2A2A2A;
			width: 70%;
			border: 1px #CD1818 solid;
			border-radius: 10px;
			padding: 40px;
			padding-bottom: 0px;
			padding-top: 10px;
		}

		.logo {
			margin: auto;
			max-width: 65%;
		}

		.hr {
			width: 50%;
			height: 2px;
			background-color: #FFFFFF;
		}

		body {
			font-family: 'Trebuchet MS';
			color: #FFFFFF;
			overflow-y: auto;
		}

		.wrap a {
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
			color: #CD1818;
			text-decoration: none;
		}

		.wrap a:visited {
			text-decoration: none;
		}

		.wrap a:hover {
			color: #676565;
		}

		.footer a {
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
			color: #000000;
			text-decoration: none;
		}

		.footer a:hover {
			color: #FFFFFF;
		}

		.footer {
			width: 100%;
			background-color: #CD1818;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			padding: 5px;
		}

		.sectiondiv {
			background-color: #262626;
			border-left-style solid;
			border-left: thick solid #202020;
			border-left-width: 40px;
			padding: 10px;
			border-radius: 5px;
			color: #BBBBBB;
		}

		.sectiondiv strong {
			color: white;
		}

		.moreinfo {
			margin-left: -10px;
			padding: 10px;
			background-color: #202020;
			color: #C4C4C4;
		}

		.infoHolder {
			background-color: #333333;
			margin-bottom: 10px;
			padding-left: 10px;
			border-radius: 2px;
			cursor: pointer;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/1659d547fd.js"></script><link href="https://use.fontawesome.com/1659d547fd.css" media="all" rel="stylesheet">
	<script>
		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
	</script>
	<script>
		function mINFO(item) {
			var ele = document.getElementById(item.getAttribute("data-ref"));
			if (ele.innerText.length > 13) {
				if (ele.style.display == "none") {
					ele.style.display = "block";
				} else {
					ele.style.display = "none";
				}
			}
		}

		collflag = true;

		function expander() {
			var a = document.getElementsByTagName('a');
			if (collflag) {
				for (var idx = 0; idx < a.length; ++idx) {
					if (a[idx].dataset.ref) {
						let openCloseEl = document.getElementById(a[idx].dataset.ref);
						if (openCloseEl && openCloseEl.innerText.length > 13) {
							flipChevron(openCloseEl.parentNode)
							openCloseEl.style.display = "block";
						}
					}
				}
				collflag = false
			} else {
				for (var idx = 0; idx < a.length; ++idx) {
					if (a[idx].dataset.ref) {
						let openCloseEl = document.getElementById(a[idx].dataset.ref);
						if (openCloseEl && openCloseEl.innerText.length > 13) {
							flipChevron(openCloseEl.parentNode)
							openCloseEl.style.display = "none";
						}
					}
				}
				collflag = true
			}
		}

		function flipChevron(ele) {
			let flipper = ele.getElementsByClassName('fa')[0];
			if (flipper) {
				if (flipper.className.indexOf('-right') > -1) {
					flipper.className = 'fa fa-chevron-down';
				} else {
					flipper.className = 'fa fa-chevron-right';
				}
			}
		}
	</script>
</head>

<body bgcolor="#202020">
	<div class="wrap">
		<div align="center">
			<a href="index.php"><img alt="Vermillion" class="logo" id="logos" src="images/logo.png"></a><br>
			<div class="hr"></div>
			<h1>Site Rules</h1>
		</div>
		<div class="sectiondiv">
			<strong>Section 1 - Introduction</strong><br>
			<br>
			Vermillion is a user based community, concentrated on Technological Development, Game Analysis, and General Discussion. Therefore, in addition to employing voluntary moderators, we allow users the freedom to act the way they think is best. This system is designed to provide an organic environment for users, while maintaining a certain degree of control against violation of site rules.
			<br /><br />
			Therefore, while we do bestow several site rules, it’s up to the users to apply common sense to decide how they act. This structure is designed so that perpetrators will be punished within the social hierarchy of the community. Nonetheless, if you see content that violates any rule on this page, disagrees with your common interest, or has an inappropriate connotation; you are obliged to address it to our staff via the report button.
			<br /><br />
			By creating an account you acknowledge and agree to behave accordingly to the rules below.
			<br /><br />

			<a style="text-align:center;cursor:pointer;" onclick="expander()">Expand/Compact all Rules</a>
		</div><br>
		<br>
		<div class='sectiondiv'><strong>Section 2 - Forum Rules</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr00'>
						a - Cross-Posting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Duplicating a thread or topic in multiple different sections of the forum is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr00' style='display:none;'> Posting identical content in different sections can be interpreted as spam. If you are unsure where to post your content, either post a thread in User Support or ask a staff member for assistance. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr01'>
						b - Double Posting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The act of posting numerous times without another user's response in between is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr01' style='display:none;'> Posting multiple consecutive replies is considered spam. If for any reason you need to add anything to your post, use the edit function to do so. This does not apply if somone deletes their post situated inbetween two of another user's posts, creating the illusion of a double post. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr02'>
						c - Baseless Malicious Accusations:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						All content containing serious or heinous claims or speculation against any member(s) must be substantiated.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr02' style='display:none;'> For any content (including reputation, posts, and threads), in regards to serious/heinous claims or speculation against a member / group of members, all claims must be substantiated. If not, then depending on the circumstances, the content will be removed to avoid causing social harm to the person(s) being targeted or harassed. Even if the claims or speculation are true, some form of evidence must be provided along side them. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr03'>
						d - General Spam:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The act of spamming is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr03' style='display:none;'> It is up to our staff to differentiate between legitimate content and outright spam.
							<br/><br/>
							The act of vouch posting or owning vouch threads are both considered general spam if    there is no extensive justification of why a user is vouching.<br/><br/>
							The edit function does not safeguard users against previously violated rules. Even if the preceding content was not spam, the staff will consider the post’s current and previous state, resting in their hands the decision of warning the user as they deem fit.<br/><br/>
							Bumping posts without adding content or information is also considered Spam.<br/><br/>
							In order to avoid becoming a target of this rule, use common sense. Posts that are too vague, off-topic in relation to the original post, repetitive, short, or useless can and will fall under this rule.
							 </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr04'>
						e - Wrong Section Posting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not post your thread in an irrelevant section in relation to your topic.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr04' style='display:none;'> Users are expected to use good judgement when posting in forum sections. Please post your thread in a section that best suits your topic. Warnings will be issued depending on the severity of the violation. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr05'>
						f - Respectful Posting & Harassment:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Being excessively mean or offensive towards other users is prohibited, especially in the case of bullying/harassment.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr05' style='display:none;'> Members of the community are expected to treat each other with dignity and respect. We understand that swearing and the use of foul language can be necessary to strengthen a point, and we most certainly don’t want to restrict the way you express yourself, however constant swearing and vulgar remarks in effort to harass other users is forbidden. Excessive vulgarity is unproductive, irrelevant, and prohibited.<br/><br/>
			Furthermore, harassing or bullying users is not allowed. It is up to our staff to identify the line here and when it is crossed, so make sure not to come close to said line.
 </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr06'>
						g - Pornographic Content:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Posting pornographic text, images, links, or any content in relation to that category, will not be tolerated.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr06' style='display:none;'> Furthermore, any content of a sexual nature such as, but not limited to, “ecchi” and risque content will be removed.  </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr07'>
						h - Writing Style & Language:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						You are required to participate in a legible, mature, and comprehensible manner, and in English.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr07' style='display:none;'> Posting content that contains pointless or excessive use of different fonts, colours, sizes, punctuation, and caps lock is prohibited.<br/><br/>Users are authorized to practice other languages, as long as the majority of their content is in English, and their use of linguistics is not exclusive to a different language. However, we will not tolerate continuation of this behavior when another user expresses annoyance due to lack of understanding. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr08'>
						i - Topic Titles:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Titles may not be short, uninformative, irrelevant to the central message, or ‘clickbait’.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr08' style='display:none;'> Users are encouraged to consider an appropriate subject for their topics before submitting them to the community. A viewer should be able to grasp a basic understanding of what the thread is just by looking at the title.
 </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr09'>
						j - Malicious Multi-Accounting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Malicious Registration/Use of multiple accounts prohibited. Examples of malicious use include Ban Circumvention and Scamming.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr09' style='display:none;'> Having multiple accounts is always suspicious, and as such if our systems determine that there is another account on your network, we will make the name(s) of that/those account(s) available publicly on your profile. However, you will not be banned for having multiple accounts unless our moderation team determines that you have used a secondary account for malicious purposes, or in specific cases at our administrative discretion. Users who were banned for a different version of this rule (before 16/06/2017) will not be unbanned, as they were banned in accordance with the rules at the time. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr010'>
						k - Necroposting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not post or revive any old, inactive threads.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr010' style='display:none;'> If a thread has been left inactive for several weeks, do not resurface it. Instead, private message the original poster regarding your concerns and questions. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr011'>
						l - Filter Evasion:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not attempt to bypass any site restriction, such as but not limited to the 20-character limit.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr011' style='display:none;'> Vermillion filters content for a reason. Please refrain from spamming or adding pointless content to your posts to bypass length filters. In addition, using spelling variations of blocked words in order to say them is prohibited.  </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr012'>
						m - Hate Speech & Derogatory Terms:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Hate Speech & Derogatory Terms are not tolerated on our site.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr012' style='display:none;'> Negative or hateful content directed at any person or group of people based on gender, race, sexual orientation, religion, or otherwise is not permitted. Regardless of your opinion on controvesial topics, you are expected to treat everyone with respect and dignity. Derogatory terms are not permitted, even if they are not used in a negative context. To be clear, this rule extends to homophobia, racism, transphobia, and anti-semitism. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr013'>
						n - Perverted Exploiting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not post scripts, codes, exploits, or demonstrations of sexual or perverted videogame exploiting.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr013' style='display:none;'> This site and the games it supports revolves around some younger users. In efforts to maintain a healthy environment for all, we request that you respect their innocence by keeping such content away from our site. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr014'>
						o - Fraud/Carding or Identity Theft:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The sharing of credit card or explicitly private information of <strong>anyone</strong> is prohibited. 
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr014' style='display:none;'> Fraudulent acts are not permitted on this website. Violation of this rule will lead to the removal of the content in question and appropriate punishment under moderator jurisdiction. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr015'>
						p - Actual Money:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Sharing of accounts or information related to Banking or any other payment websites is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr015' style='display:none;'> Violation of this rule is illegal and will not be permitted on our site. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr016'>
						q - Unauthorised Sales/Releases:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The resale of another person's work, or the public release (leaking) of someone's verm-related work, is not permitted.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr016' style='display:none;'> Under no circumstances are you permitted to resell another person's work, whether that user is providing their work on verm or elsewhere.<br/><br/>While we do not currently disalow the <b>free</b> release of work from off-site sources, you must follow copyright and intellectual property law when doing so. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr017'>
						r - Sale Quality:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The quality of original content may need to be verified by staff, especially in the case of eBooks, when being sold.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr017' style='display:none;'> Situations in which the quality, validity, or existence of a piece of work is in any way questionable, staff may request a copy of the content for verification if you wish to sell it. If you would prefer not to share the product, we may ask that you not sell it. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr018'>
						s - Unauthorized Access, Tampering, and Botting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						No malicious infiltration of any of our site systems/subsystems, nor botting/automation of our functionality.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr018' style='display:none;'> Bans resultant from violations of this rule will not be revoked. Unless given explicit permission, do not attempt to circumvent any of our security measures or automate any processes. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 3 - Avatars</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr10'>
						a - Size: </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Avatar images must be less than 180x220 pixels to be displayed on our website.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr10' style='display:none;'> Users are permitted to use an image from the supplied gallery, image sharing website, or directly from their computer. However, only specific external image sharing websites are allowed.  For more information, visit <a target='_blank' href='pages.php?page=badimage'>this page.</a> </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr11'>
						b - Display:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Avatars may not portray any symbolic representation to official status such as fake titles or staff member models.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr11' style='display:none;'> This rule applies to user titles and usernames as well. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr12'>
						c - Avatar Etiquette: </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Images are subject to the same rules regarding, but not limited to pornography and vulgarity outlined above.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr12' style='display:none;'> Violations will not be tolerated, leading to harsh punishments. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 4 - Offsite Linking</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr20'>
						a - Etiquette:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not post links to pornographic, hateful, violent, gorey, terrorist, or generally inappropriate content.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr20' style='display:none;'> While we encourage you to use common sense and good judgement, feel free to ask a staff member when you are unsure whether or not your intended post would fall under this category.  </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr21'>
						b - Download links:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Download links must be accompanied by a <a href='https://www.virustotal.com/'>virus total scan</a> of the download. Video evidence is also encouraged where appropriate.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr21' style='display:none;'> If the file size is too large for virus total to read (Greater than 512MB) then it is not permitted on this site, unless the download is separated in small parts that are able to be scanned. Download links unaccompanied by a virus total scan will be removed, and there will be an on-going investigation regarding the possible violation of rule 4E. Intentionally accompanying a download with a false virus total link in efforts to hide malware is strictly prohibited and is a punishable offence.  </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr22'>
						c - Malware:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Distributing files containing or having any relation to malware is not permitted.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr22' style='display:none;'> This rule applies regardless of whether or not you know the file is malicious. If you are unsure, do not post the file nor ask the community if it is malicious.<br/><br/>

			Furthermore, all software products*, regardless of whether they are being released for free or sold, must state what personally identifiable information (PII*) they store <strong>and why</strong> wherever on site they are being distributed. Lengthy temp bans & a request to pause sales/releases on our website until that information is public will come from us discovering omission of data collection.<br/><br/>
			
			*software products, including but not limited to: script executors, lua scripts, and game modifying clients<br/>
			*PII, any data which links an individual to the content they post online, including but not limited to: such as IPs, Hardware IDs, Usernames, Passwords, and email addresses. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr23'>
						d - Trollware:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Do not post files that are not what you say they are.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr23' style='display:none;'> Files designed to ‘troll’ users by promising to be something they’re not will be treated as malware, and a violation of rule 2E. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr24'>
						e - Embedding:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Any link embedded into our website will be considered an external link.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr24' style='display:none;'> As a result, section 4 of the rules will apply to it. Examples are images and videos embedded through our [img] and [video] tags. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr25'>
						f - Encryption/Obfuscation:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Encryption or obfuscation of links is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr25' style='display:none;'> This applies to, but is not limited to, link shorteners such as goo.gl, bit.ly, and adf.ly . In addition, links that are intentionally hid by users in spoilers or broken up into sections fall under this rule. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr26'>
						g - Piracy/Torrenting:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Links to magnet or .torrent files are prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr26' style='display:none;'> Malware can easily be associated with torrent files since torrenting is most often used for the distribution of malicious files. For the safety of the community, we ask that you do not provide links to these sources. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr27'>
						h - Advertising & Donations:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Advertising sites, or requesting money (donations, begging, etc) for the sake of personal or community gain is prohibited.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr27' style='display:none;'> This rule applies to referral sites, other forum boards, and any other site used for this purpose. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 5 - Signatures</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr30'>
						a - Content:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Signatures may contain up to five lines of text and/or two images.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr30' style='display:none;'> Signatures must be less than 200 pixels and of the lowest file size you can manage to ensure optimal page loading times. This can be overlooked if your signature is placed inside of a spoiler tag using the correct code during the editing process. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr31'>
						b - Display:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Signatures may not portray any symbolic representation to official status such as fake titles or staff member models.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr31' style='display:none;'> This includes copying a staff members signature, claiming to be one in your own, or otherwise implying that you have site status. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 6 - Enforcement</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr40'>
						a - Five Strike Policy:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Users will be warned a maximum of five times for any and all offences in a three month period.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr40' style='display:none;'> If the need for a fifth warning arises, a 1-week ban will be issued. If the user violates another rule after being banned for 5 strikes and none of their warnings have expired, they will receive another temporary ban. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr41'>
						b - Disputes:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Aggressive and Excessive arguing after being warned will result in an additional warning.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr41' style='display:none;'> You are entitled to challenge your warning if you believe it to be unjust, and you are entitled to ask for clarification on your warning, however you may not be disrespectful in the process. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr42'>
						c - Complaints:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						If you feel unjustly warned, you may appeal by responding to the warning private message.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr42' style='display:none;'> If the staff member who issued a warning feels you were mistreated, they will remove a warning. On the other hand, if they notice you are being irrational, childish, and/or argumentative, it will lead to an additional warning as stated in the above rule. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr43'>
						d - Circumvention:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Attempting to circumvent a ban or moderator action will result in a permanent ban of your account(s).
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr43' style='display:none;'> Acts that fall under circumvention include but are not limited to, re-registering or using an already registered account under a non-banned username, changing IP addresses, using a new email account, or any other action that can be taken to hide your identity as the owner of the sanctioned account. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr44'>
						e - Warning Exceptions:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The staff team withholds the right to bypass or neglect the five strike policy.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr44' style='display:none;'> Moderator actions will ALWAYS be based on the rules, however a moderator reserves the right to act accordingly and rightfully when they believe is necessary to establish order and maintain control. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr45'>
						f - Permanent Bans:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						Rationalization and contemplation play huge roles in the moderation team before issuing a permanent ban.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr45' style='display:none;'> Since permanent bans are a last resort mechanism, large amounts of speculation and thought are put into reasons for issuing a permanent ban. While Vermillion may consider lifting permanent bans from time to time, this is a very rare circumstance. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr46'>
						g - Moderating:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						All staff members reserve the right to edit, remove, or perform any other moderation action on any content you add to our site.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr46' style='display:none;'> Because as the rules can never cover every possible issue, it is imperative that staff members are allowed a certain degree of autonomy. For this reason, they can still warn you for non-rules providing they justify their action. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr47'>
						h - Private Messaging </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						All site rules apply to the Private Messaging system. 
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr47' style='display:none;'> Abuse or exploitation of this system may result in the revocation of Private Messaging privileges, as well as appropriate warnings and bans depending on the offence. </div></div><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr48'>
						i - Chatbox Moderation </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						All site rules apply to the chatbox.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr48' style='display:none;'> As a result, we are just as inclined to punish members in the on the site if they break any site rules while in the chatbox. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 7 - Privacy</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr50'>
						a - Privacy Policy:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						The sharing of any explicitly personal information of anyone, including non-users is not permitted.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr50' style='display:none;'> Such 'information' includes, but is not limited to:
							<ul>
								<li>Names</li>
								<li>IP Addresses</li>
								<li>Email Addresses</li>
								<li>Social Media Pages</li>
								<li>Skype Names</li>
								<li>Content from Private Messages</li>
							</ul>
							The only exception to this rule being if the person whose information is being shared permits it.<br/><br/>
							
							Privacy is important to us, as it is to many of the members of Vermillion. All content posted by any member of this site is to be kept on this site, unless the original poster of the content explicitly says otherwise. In addition, private messages are to remain private, and without explicit permission, content that users email to you privately is to stay between those users, you, and staff members. Some information is private for a reason. Requesting or explicitly asking for private information will not be tolerated.
							 </div></div><div class='infoHolder' style='cursor:auto !important;'>
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<a data-ref='arr51'>b - Account Dumps:</a>
						Publicly posting login information of accounts that do not belong to you is not permitted.
					</span></div></div><br/><br/><div class='sectiondiv'><strong>Section 8 - Chat Box</strong><br/><br/><div class='infoHolder' onclick="mINFO(this.getElementsByTagName('a')[0]);flipChevron(this)">
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<div class='tooltip'><a data-ref='arr60'>
						a - Bots:  </a>
						<span class='tooltiptext'>Click for more info.</span>
						</div>
						With the exception of passive bots, chatbox bots are not permitted.
						
					</span>
					<div style='float:right;line-height:30px;display:inline-block;max-width:95%;padding-right:5px;'><i class='fa fa-chevron-right'></i></div>
					<div class='moreinfo' id='arr60' style='display:none;'> Passive bots are idle bots that record and log messages sent through the chat. These bots do not send messages or take commands, which is allowed in the chatbox. On the other hand, the use of bots that take commands and talk in chat is prohibited unless stated otherwise by a staff member. </div></div></div><br/><br/><div class='sectiondiv'><strong>Section 9 - Reputation</strong><br/><br/><div class='infoHolder' style='cursor:auto !important;'>
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<a data-ref='arr70'>a - Asking for rep:</a>
						Do not ask for/imply you should be given reputation under any circumstances.
					</span></div><div class='infoHolder' style='cursor:auto !important;'>
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<a data-ref='arr71'>b - Selling rep:</a>
						Do not sell, exchange, or attempt to use reputation as a form of currency.
					</span></div><div class='infoHolder' style='cursor:auto !important;'>
					<span style='line-height:30px;display:inline-block;max-width:95%;'>
						<a data-ref='arr72'>c – False reputation report:</a>
						Reputations are opinions and should not be reported just because you disagree with an opinion.
					</span></div></div><br/><br/>		<span style="font-size:70%; color:#BBBBBB;">Last Updated 08/01/2022 (DD/MM/YY)</span>
		<br /><br />
		<div align="center" class="footer">
			<a href="index.php">Vermillion&emsp;</a>- <a href="contact.php">&emsp;Contact Us&emsp;</a>- <a href="removals">&emsp;Illegal
				Content Removal&emsp;</a>- <a href="showteam.php">&emsp;Staff&emsp;</a>-
			<a href="member.php?action=register">&emsp;Register&emsp;</a>- <a href="#logos">&emsp;Back to Top&emsp;</a>
		</div>
	</div>
</body>
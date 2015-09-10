<!doctype html>
<html>
	<head>
        <!-- Checking out the whats underneath? Nice! ;) -->
        <link href="//fonts.googleapis.com/css?family=Yantramanav:400,100" rel="stylesheet" type="text/css">
        <link href="libraries/featherlight.min.css" rel="stylesheet" type="text/css">
        <link href="styles/cv.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>
            <a href=".">david.neilsen.nz</a>
        </h1>

        <div class="personal-statement">
            <h2>Coder</h2>
            <p>
                Hi :)
            </p>

            <p>
                I'm David, and I am looking for the next opportunity to help you do awesome things.
            </p>

            <p>
                Coding is my thing, and I would love to here from you, so check out what I can do then drop me a line.
            </p>

            <p>
                <em>Lets build some awesome.</em>
            </p>
        </div>

        <div class="skills">
            <h2>Skills</h2>
            <div class="skill-chart-wrapper">
                <div class="skill-chart">
                    <h3>Languages</h3>
                    <svg id="skills-language" preserveAspectRatio="none">
                        <g class="skill-chart-bars"></g>
                    </svg>
                </div>
                <div class="skill-chart">
                    <h3>Frameworks</h3>
                    <svg id="skills-framework" preserveAspectRatio="none">
                        <g class="skill-chart-bars"></g>
                    </svg>
                </div>
                <div class="skill-chart">
                    <h3>Platforms</h3>
                    <svg id="skills-platform" preserveAspectRatio="none">
                        <g class="skill-chart-bars"></g>
                    </svg>
                </div>
                <div class="skill-chart">
                    <h3>Front End</h3>
                    <svg id="skills-front-end" preserveAspectRatio="none">
                        <g class="skill-chart-bars"></g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="see-more see-more-skills">
            <button onclick="document.body.classList.add('show-more-skills')">I want to see more skills.</button>
        </div>

        <div class="skills-more-wrapper">
            <div class="skill-chart">
                <h3>Web</h3>
                <svg id="skills-web" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Testing</h3>
                <svg id="skills-testing" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Cloud</h3>
                <svg id="skills-cloud" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Build</h3>
                <svg id="skills-build" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Principles</h3>
                <svg id="skills-principles" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Frameworks</h3>
                <svg id="skills-frameworks" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Package Managment</h3>
                <svg id="skills-packages" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Databases</h3>
                <svg id="skills-db" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>

            <div class="skill-chart">
                <h3>Platforms</h3>
                <svg id="skills-platforms" preserveAspectRatio="none">
                    <g class="skill-chart-bars"></g>
                </svg>
            </div>
        </div>
        <hr/>

        <div class="see-me-wrapper">
            <a href="https://stackoverflow.com/users/268074/petah" target="_blank" class="see-me">
                <img src="images/stackoverflow.svg">
                <div class="see-me-info">
                    <h3>Stack Overflow</h3>
                    <p>23,000+ rep, Top 2% overall</p>
                    <em>stackoverflow.com/users/268074/petah</em>
                </div>
            </a>
            <a href="https://github.com/petah" target="_blank" class="see-me">
                <img src="images/github.svg" title="Icon by Ivlichev Victor Petrovich">
                <div class="see-me-info">
                    <h3>Github</h3>
                    <p>5,000+ commits, 20 repos, 41 forks</p>
                    <em>github.com/petah</em>
                </div>
            </a>
        </div>
        <hr/>

        <div class="example-work-wrapper">
            <?php
                $examples = file_get_contents(__DIR__ . '/../private/data/examples.json');
                $examples = json_decode($examples);
            ?>
            <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="example-work">
                    <?php if (isset($examples[$i]->image)): ?>
                        <img src="images/<?= $examples[$i]->image; ?>" />
                    <?php endif; ?>
                    <div class="example-work-info">
                        <h3><?= $examples[$i]->name; ?></h3>
                        <?php foreach ($examples[$i]->urls as $url): ?>
                            <a href="<?= $url; ?>" target="_blank"><?= preg_replace('/^www\./', '', parse_url($url)['host']); ?></a>
                        <?php endforeach; ?>
                        <p><?= $examples[$i]->desc; ?></p>
                    </div>
                    <ul class="tags">
                        <?php foreach ($examples[$i]->tags as $tag): ?>
                            <li class="tag"><em><?= $tag; ?></em></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endfor; ?>
        </div>

        <div class="see-more see-more-work">
            <button onclick="document.body.classList.add('show-more-work')">I want to see more work.</button>
        </div>

        <div class="example-work-more-wrapper">
            <?php for ($i = 6; $i < count($examples); $i++): ?>
                <div class="example-work">
                    <?php if (isset($examples[$i]->image)): ?>
                        <img src="images/<?= $examples[$i]->image; ?>" />
                    <?php endif; ?>
                    <div class="example-work-info">
                        <h3><?= $examples[$i]->name; ?></h3>
                        <?php foreach ($examples[$i]->urls as $url): ?>
                            <a href="<?= $url; ?>" target="_blank"><?= preg_replace('/^www\./', '', parse_url($url)['host']); ?></a>
                        <?php endforeach; ?>
                        <p><?= $examples[$i]->desc; ?></p>
                    </div>
                    <ul class="tags">
                        <?php foreach ($examples[$i]->tags as $tag): ?>
                            <li class="tag"><em><?= $tag; ?></em></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endfor; ?>
        </div>

        <div class="timeline">
            <div id="timeline-embed"></div>
        </div>

        <div class="experience-wrapper">
            <div class="experience">
                <em>2015</em>
                <h3>Endace</h3>
                <h4>Emulex, Avago Technulogies</h4>
                <ul>
                    <li>Building online network analytics platform using Node JS, PHP, Java, and proprietary hardware probes.</li>
                    <li>Service oriented architecture.</li>
                    <li>Big data, petabyte scale, analytics.</li>
                    <li>Agile team of 5 in R&D, 100+ organisation wide.</li>
                    <li>HA, scalable cloud deployment using AWS and Azure.</li>
                    <li>Full stack from packet level inspection to high level analytics and intrusion detection systems.</li>
                </ul>
            </div>
            <div class="experience">
                <em>2009-2015</em>
                <h3>PAN Media</h3>
                <h4>Evoke Creative, ASAP Productions</h4>
                <ul>
                    <li>Development of business systems including, E-Commerce, invoicing, CRM, CMS, lead management, and reporting systems.</li>
                    <li>Database schema design and query optimisation delivering increased performance on large scale datasets.</li>
                    <li>Optimisation of web page performance including backend, frontend, rendering, payload size.</li>
                    <li>Leading a team of developers, designers, and involved in the project management and sales side.</li>
                    <li>Researching emerging standards and new technologies and analysis of time vs benefit such as PHP 5.6, HTML5, CSS3, SCSS, and SVG.</li>
                    <li>Development of a site management platform, built on a reusable code base, used to configure, manage, deploy, migrate, test, and analyse web applications.</li>
                    <li>Creating tools for environment setup, continuous integration, compiling, and testing.</li>
                </ul>
                <h5>Significant Work</h5>
                <p>Mammoth PHP Component Framework. Lead development on a modular framework to aid rapid website development. Using this framework we could create fully functional and styled websites in a matter of days. Combined with our site management platform, all websites were constantly integrated, upgraded, and tested.</p>
                <h5>Capabilities included:</h5>
                <ul>
                    <li>Advanced CMS including multi-block page layouts, inline content and layout editing, pluggable page management, and dynamic data templates.</li>
                    <li>Full article management (for blogs, or online publication management).</li>
                    <li>Rule based authorisation framework including user and group policy management</li>
                    <li>Industry standard encryption and hashing methods.</li>
                    <li>Statistics, logging, revision histories, and auditing capability.</li>
                    <li>Database interface abstraction allowing integration with any data store including implementations in SQL, Mongo, Memcache, flat file, and more.</li>
                    <li>Highly customisable, and easily to implement data tables including exporting and advanced filtering.</li>
                    <li>Lead management and form builder systems.</li>
                    <li>User manageable galleries, scrolling banners, and navigations.</li>
                    <li>Multi-site management with capabilities for shared and unique content.</li>
                    <li>Meta data management including Open Graph, canonicals, affiliates, and analytics.</li>
                    <li>Modular ecommerce system including product catalogues, categories, specials, freight zones, DPS integration, etc.</li>
                    <li>Integrated full site search backed by the Apache Solr engine.</li>
                    <li>Dynamic EAV model structure for rapid prototyping, and automated backend CRUD interfaces.</li>
                </ul>
            </div>
        </div>

        <div class="see-more see-more-experience">
            <button onclick="document.body.classList.add('show-more-experience')">I want to see more experience.</button>
        </div>

        <div class="experience-more-wrapper">
            <div class="experience">
                <em>2008</em>
                <h3>InnovatioNZ</h3>
                <p>Design and implementation of a Microsoft Access database to store business information. Administration of Microsoft Windows Server 2003, 10+ Windows workstations (98, XP, Vista). Conversion and consolidation of ISP (SMTP) and legacy Novell email systems into Microsoft Exchange Server and Microsoft Outlook clients.</p>
            </div>
            <div class="experience">
                <em>2008</em>
                <h3>Tech1</h3>
                <p>Web development and graphic design. Developing and maintaining existing websites use PHP, MySQL, XHTML, CSS, and Jojo CMS.</p>
            </div>
            <div class="experience">
                <em>2006-2007</em>
                <h3>Wintec</h3>
                <p>Tutoring students in Delphi, Java, PHP, HTML, C# and KPL programming and SQL.</p>
            </div>
            <div class="experience">
                <p><small>Previous experience, 2002-2009, includes freelance web development and design, hospitality, and restaurant management.</small></p>
            </div>
        </div>
        <hr/>
        <div class="qualification-wrapper">
            <div class="qualification">
                <em>2008</em>
                <h3>Diploma in Information and Communication Technology Level 6 (awarded with merit)</h3>
                <h4><em>Livestock improvement award for the highest achiever</em></h4>
            </div>
            <div class="qualification">
                <em>2007</em>
                <h3>Diploma in Information and Communication Technology Level 5 (awarded with merit)</h3>
                <h4><em>Connect nz award for the highest achiever</em></h4>
            </div>
            <div class="qualification">
                <em>2006</em>
                <h3>Certificate in Computing and Information Technology Level 5 (passed with merit)</h3>
            </div>
            <div class="qualification">
                <em>2006</em>
                <h3>National Certificate in Computing Level 3 (passed with merit)</h3>
            </div>
        </div>
        <hr/>
        <div class="qualification-wrapper">
            <div class="qualification ggj">
                <em>2013-2015</em>
                <h3>Global Game Jam</h3>
                <h4>Gravity Jam</h4>
                <h5><em>Site Favorite</em></h5>
                <p>
                    <a href="http://globalgamejam.org/2015/games/gravityjam" target="_blank">globalgamejam.org/2015/games/gravityjam</a><br/>
                    <a href="http://www.stuff.co.nz/technology/games/65644103/team-creates-winning-space-game-at-warp-speed" target="_blank">stuff.co.nz/technology/games/65644103/team-creates-winning-space-game-at-warp-speed</a>
                </p>

                <h4>Fourbro Beardbro Bro Battle</h4>
                <p>
                    <a href="http://globalgamejam.org/2014/games/fourbro-beardbro-bro-battle" target="_blank">globalgamejam.org/2014/games/fourbro-beardbro-bro-battle</a>
                </p>

                <h4>The Seeker</h4>
                <h5><em>Site Favorite</em></h5>
                <p>
                    <!--<a href="http://2013.globalgamejam.org/2013/seeker" target="_blank">2013.globalgamejam.org/2013/seeker</a>-->
                    <a href="http://www.waikato.ac.nz/news-events/media/2013/the-seeker-wins-site-favourite-at-waikato-leg-of-the-global-game-jam" target="_blank">waikato.ac.nz/news-events/media/2013/the-seeker-wins-site-favourite-at-waikato-leg-of-the-global-game-jam</a>
                </p>

                <a href="#" data-featherlight="images/ggj/lookout.png"><img src="images/ggj/lookout.png" /></a>
                <a href="#" data-featherlight="images/ggj/fourbro-screen_0.png"><img src="images/ggj/fourbro-screen_0.png" /></a>
                <a href="#" data-featherlight="images/ggj/the-seeker-ss.png"><img src="images/ggj/the-seeker-ss.png" /></a>
            </div>
        </div>
        <hr/>
        <div class="testimonial-wrapper">
            <div class="testimonial">
                <h3>Toby Hutchings, PAN Media Digital Director.</h3>
                <blockquote>
                    <p>"It is my pleasure to recommend David Neilsen, his performance working as lead software developer for PAN Media Limited proved that he will be a valuable addition to any company."</p>

                    <p>"I have known and employed David for five years in my capacity as a Found, Director and Digital Operations Manager at PAN Media, and one year previously as Managing Director at Evoke Creative Limited (Evoke Creative was acquired by PAN Media in 2010). PAN Media is a full service advertising agency with approximately 15 staff based in Hamilton, New Zealand. PAN’s services include creative design, advertising, website design and software development. David worked for me on numerous projects as a lead software developer, and based on his work, I rank him as one of the best developers I have ever worked with."</p>

                    <p>"David has distinguished himself by consistently producing exceptional work, often under tight deadlines and with complex requirements. In his time at our company David has demonstrated a thorough and robust knowledge of software development principles. His ability and ambition to learn and adapt to new technologies is nothing short of impressive."</p>

                    <p>"David is an exceptionally competent software developer with good analytical and communication skills. He is well regarded by his peers and clients alike. Based on his performance in our company, he will be an extremely positive asset to your team. David is highly intelligent but also a great guy, and given the opportunity I would not hesitate to work with David again in the future."</p>
                </blockquote>
            </div>
            <div class="testimonial">
                <h3>David Walsh, Mozilla Web Developer.</h3>
                <blockquote>
                    <p>"Raptor Editor looks epic, and probably just what I'm looking for."</p>
                </blockquote>
            </div>
            <div class="testimonial">
                <h3>Blaine Rakena, Multimedia tutor at Wintec.</h3>
                <blockquote>
                    <p>"David has a positive attitude towards attaining his goals and is not afraid of hard work and extensive study to achieve them. David has a friendly personality and has shown patience and consistency when working with others. He has the ability to communicate effectively both in a one on one and public speaker environment."</p>
                </blockquote>
            </div>
            <div class="testimonial">
                <h3>Alan Fish, Owner operator of InnovatioNZ Ltd.</h3>
                <blockquote>
                    <p>"The contract involved was short term, There was a Specific time frame in which David had to work he completed the tasks set in the time available."</p>
                    <p>"David is gaining experience, He was able to apply himself outside into new areas where he had no experience and solve these competently."</p>
                </blockquote>
            </div>
        </div>

        <div class="footer">
            <p class="bell">Give me a bell.</p>
            <p class="email">Just send an email to <a href="mailto:d.c.neilsen@gmail.com"><em>d.c.neilsen@gmail.com<em></a></p>
        </div>

        <script src="libraries/d3.min.js"></script>
        <script src="libraries/jquery.min.js"></script>
        <script src="libraries/timeline-min.js"></script>
        <script src="libraries/featherlight.min.js"></script>
        <script src="scripts/cv.js"></script>
        <script>
            new Cv.SkillChart('#skills-language', [
                {
                    label: 'PHP',
                    level: 100,
                },
                {
                    label: 'JavaScript',
                    level: 100,
                },
                {
                    label: 'Java',
                    level: 50,
                },
                {
                    label: 'C#',
                    level: 40,
                },
            ]);
            new Cv.SkillChart('#skills-framework', [
                {
                    label: 'Symfony',
                    level: 100,
                },
                {
                    label: 'Laravel',
                    level: 100,
                },
                {
                    label: 'Node',
                    level: 90,
                },
                {
                    label: 'Angular',
                    level: 85,
                },
            ]);
            new Cv.SkillChart('#skills-platform', [
                {
                    label: 'Linux',
                    level: 95,
                },
                {
                    label: 'DevOps',
                    level: 90,
                },
                {
                    label: 'AWS',
                    level: 85,
                },
                {
                    label: 'Azure',
                    level: 40,
                },
            ]);
            new Cv.SkillChart('#skills-front-end', [
                {
                    label: 'SCSS',
                    level: 100,
                },
                {
                    label: 'SVG',
                    level: 95,
                },
                {
                    label: 'UX',
                    level: 90,
                },
                {
                    label: 'Design',
                    level: 40,
                },
            ]);

            new Cv.SkillChart('#skills-web', [
                {
                    label: 'HTML5',
                    level: 100,
                },
                {
                    label: 'CSS3',
                    level: 100,
                },
                {
                    label: 'EcmaScript',
                    level: 95,
                },
                {
                    label: 'Less',
                    level: 90,
                },
                {
                    label: 'Typescript',
                    level: 90,
                },
                {
                    label: 'Web Sockets',
                    level: 90,
                },
                {
                    label: 'Web RTC',
                    level: 60,
                },
            ]);

            new Cv.SkillChart('#skills-testing', [
                {
                    label: 'Unit Testing',
                    level: 100,
                },
                {
                    label: 'Intergration Testing',
                    level: 75,
                },
                {
                    label: 'Selenium',
                    level: 60,
                },
            ]);

            new Cv.SkillChart('#skills-principles', [
                {
                    label: 'OOP',
                    level: 100,
                },
                {
                    label: 'MVC',
                    level: 95,
                },
                {
                    label: 'Design Patterns',
                    level: 90,
                },
                {
                    label: 'Agile',
                    level: 90,
                },
                {
                    label: 'Kanban',
                    level: 85,
                },
                {
                    label: 'Scrum',
                    level: 80,
                },
            ]);

            new Cv.SkillChart('#skills-build', [
                {
                    label: 'Phing',
                    level: 100,
                },
                {
                    label: 'Grunt',
                    level: 90,
                },
                {
                    label: 'Gulp',
                    level: 70,
                },
                {
                    label: 'Continuous Integration',
                    level: 70,
                },
            ]);

            new Cv.SkillChart('#skills-cloud', [
                {
                    label: 'S3',
                    level: 100,
                },
                {
                    label: 'Cloud Formation',
                    level: 95,
                },
                {
                    label: 'Elastic Beanstalk',
                    level: 95,
                },
                {
                    label: 'EC2',
                    level: 80,
                },
                {
                    label: 'Lambda',
                    level: 70,
                },
                {
                    label: 'SQS',
                    level: 70,
                },
                {
                    label: 'SNS',
                    level: 70,
                },
            ]);

            new Cv.SkillChart('#skills-frameworks', [
                {
                    label: 'Opencart',
                    level: 100,
                },
                {
                    label: 'Express',
                    level: 95,
                },
                {
                    label: 'Code Igniter',
                    level: 90,
                },
                {
                    label: 'Spring',
                    level: 45,
                },
            ]);

            new Cv.SkillChart('#skills-packages', [
                {
                    label: 'NPM',
                    level: 100,
                },
                {
                    label: 'Bower',
                    level: 100,
                },
                {
                    label: 'Composer',
                    level: 100,
                },
            ]);

            new Cv.SkillChart('#skills-db', [
                {
                    label: 'SQL',
                    level: 95,
                },
                {
                    label: 'MySQL',
                    level: 95,
                },
                {
                    label: 'RDBMS Performance',
                    level: 85,
                },
                {
                    label: 'MongoDB',
                    level: 70,
                },
                {
                    label: 'Postgres',
                    level: 60,
                },
                {
                    label: 'SQL Server',
                    level: 60,
                },
            ]);

            new Cv.SkillChart('#skills-platforms', [
                {
                    label: 'Ubuntu',
                    level: 95,
                },
                {
                    label: 'Debian',
                    level: 90,
                },
                {
                    label: 'CentOS',
                    level: 70,
                },
                {
                    label: 'Docker',
                    level: 70,
                },
            ]);
        </script>

    <script type="text/javascript">
        var timeline_config = {
            width: '100%',
            height: '220',
            start_zoom_adjust: 2,
            embed_id: 'timeline-embed',
            start_at_end: true,
            css: 'libraries/timeline.css',
            js: 'libraries/timeline-min.js',
            source: {
                timeline: {
                    type: "default",
                    date: [
                        {
                            startDate: '2015,02,01',
                            endDate: new Date(),
                            headline: 'Endace',
                        }, {
                            startDate: '2009,11,01',
                            endDate: new Date(),
                            headline: 'PAN Media',
                        }, {
                            startDate: '2008,06,01',
                            endDate: '2008,07,01',
                            headline: 'InnovatioNZ',
                        }, {
                            startDate: '2008,02,01',
                            endDate: '2008,06,01',
                            headline: 'Tech1',
                        }, {
                            startDate: '2006,06,01',
                            endDate: '2007,11,01',
                            endDate: new Date(),
                            headline: 'Wintec Peer Tutoring',
                        }, {
                            startDate: '2008,01,01',
                            endDate: '2009,01,01',
                            endDate: new Date(),
                            headline: 'DipICT L6',
                        }, {
                            startDate: '2007,01,01',
                            endDate: '2008,01,01',
                            endDate: new Date(),
                            headline: 'DipICT L5',
                        }, {
                            startDate: '2006,07,01',
                            endDate: '2007,01,01',
                            endDate: new Date(),
                            headline: 'CCIT',
                        }, {
                            startDate: '2006,01,01',
                            endDate: '2006,07,01',
                            headline: 'NCC',
                        }, {
                            startDate: '2013,01,25',
                            endDate: '2013,11,27',
                            headline: 'Global Game Jam',
                        }, {
                            startDate: '2015,01,20',
                            endDate: '2015,01,23',
                            headline: 'Global Game Jam',
                        }, {
                            startDate: '1987,01,18',
                            endDate: new Date(),
                            headline: 'Grand Entrance',
                        }, {
                            startDate: '1987,01,18',
                            endDate: new Date(),
                            headline: 'Growing up and stuff',
                        }, {
                            startDate: '1997,01,01',
                            endDate: new Date(),
                            headline: 'Started Coding',
                        },
                    ],
                },
            },
        };
    </script>
    <script type="text/javascript" src="libraries/storyjs-embed.js"></script>
	</body>
</html>
var app = angular.module('encalm', []);

app.controller('careers', function ($scope) {

    $scope.careerList = [{
            id: 1,
            jobcode: 'EH/DEL/0001',
            title: 'ASSOCIATE - FOOD & BEVERAGE',
            department: 'LOUNGE OPERATIONS',
            location: 'DELHI',
            totalOpening: 150,
            overview: 'Guest Management, Up-selling of products & services, Handling of Guest Complaints, Efficient & safe delivery of F&B orders',
            qulification: 'BHM/BSc in Hospitality/Hotel Management.',
            skills: ['Proficient in English', 'Customer Oriented', 'Positive Attitude', 'Familiarity with Hospitality Industry Standards'],
            emailid: 'Careers@encalm.com'
        },
        {
            id: 2,
            jobcode: 'EH/DEL/0002',
            title: 'ASSOCIATE - ATITHYA',
            department: 'ATITHYA',
            location: 'DELHI',
            totalOpening: 50,
            overview: 'Welcoming & Assisting the Guests within the Airport, Check-in & Check-out procedures, Handling of Guest Complaints.',
            qulification: 'BHM/BSc in Hospitality/Hotel Management/Diploma in Travel or Tourism',
            skills: ['Proficient in English', 'Customer Oriented', 'Positive Attitude', 'Familiarity with Hospitality Industry Standards'],
            emailid: 'Careers@encalm.com'
        },
        {
            id: 3,
            jobcode: 'EH/DEL/0003',
            title: 'EXECUTIVE/ASSISTANT MANAGER - PURCHASE',
            department: 'SCM',
            location: 'GURUGRAM',
            totalOpening: 2,
            overview: 'Handling routine purchase orders(OPEX & CAPEX Items), Inventory Management, Maintaining the supplier database, purchase records, Preparing cost estimates & managing budgets.',
            qulification: 'Bachelor’s Degree/Diploma in Supply Chain/Logistics or any other related field.',
            skills: ['Minimum experience of 4-7 years in F&B/Engineering', 'Project purchase in Hospitality/Hotel/Aviation or any other related industry.'],
            emailid: 'Careers@encalm.com'
        },
        {
            id: 4,
            jobcode: 'EH/DEL/0004',
            title: 'EXECUTIVE - IT',
            department: 'IT',
            location: 'DELHI',
            totalOpening: 2,
            overview: 'System & Network Administration, VPN network maintenance, Set-up & maintain PC/LAN/ISP network for Office & Operations.',
            qulification: 'BCA/BSc IT from any recognised university.',
            skills: ['Minimum experience of 3 years as IT Personnel in Hospitality/Hotel/Aviation or any other related industry.'],
            emailid: 'Careers@encalm.com'
        },
        /*    {
               id:5,
               jobcode: 'EH/DEL/0005',
               title: 'PR & MARCOM MANAGER',
               department: 'SALES & MARKETING',
               location: 'GURUGRAM',
               totalOpening: 1,
               overview: 'Plan and implement social media strategy for Facebook/Instagram/Twitter/Company Website. Promotional Campaingns, PR & Branding Activities.',
               qulification: "Bachelor’s/Master's Degree in Marketing with additional qualification of content writing & digital marketing or any other related field",
               skills: ['Minimum experience of 4 years in PR & Digital Marketing Activities in Hospitality/Hotel/Aviation or any other related industry.'],
               emailid: 'Careers@encalm.com'
           }, */
        {
            id: 6,
            jobcode: 'EH/DEL/0006',
            title: 'EXECUTIVE/ ASSISTANT MANAGER - SALES',
            department: 'SALES & MARKETING',
            location: 'GURUGRAM',
            totalOpening: 2,
            overview: 'Achievement of Sales Target, Cold Calling, Identification of New Corporates/Travel Agents/Airline Partners for Business Expamsion.',
            qulification: "Bachelor’s/Master's Degree in Sales as a specialisation or any other related field",
            skills: ['Minimum experience of 3-6 years Travel Sales in Hospitality/Hotel/Aviation or any other related industry.'],
            emailid: 'Careers@encalm.com'
        }, {
            id: 7,
            jobcode: 'EH/DEL/0007',
            title: 'EXECUTIVE - ACCOUNTS PAYABLE',
            department: 'FINANCE & ACCOUNTS',
            location: 'GURUGRAM',
            totalOpening: 2,
            overview: "Prepare weekly Cash Flow Statement.Prepare invoices and receipts.Check the Debit Notes / Invoices / Credit Notes. Budget Preparation. Responsible for trial balance, balance sheet & Advance installment. Petty cash reimbursement schedule handling.",
            qulification: "CA/ICWA/Bachelor’s/Master's Degree in Finance & Accounts as a specialisation or any other related field",
            skills: ['Minimum experience of 3-6 years in Hospitality/Hotel/Aviation or any other related industry.'],
            emailid: 'Careers@encalm.com'
        }, {
            id: 8,
            jobcode: 'EH/DEL/0008',
            title: 'EXECUTIVE - ACCOUNTS RECEIVABLE',
            department: 'FINANCE & ACCOUNTS',
            location: 'GURUGRAM',
            totalOpening: 2,
            overview: '(a) Timely and accurate billing to the customers, (b) Reconciliation of billing with the collections from the customers and outstanding dues and (c) Providing timely and accurate Revenue MIS / related clarifications to all the stakeholders.',
            qulification: "CA/ICWA/Bachelor’s/Master's Degree in Finance & Accounts as a specialisation or any other related field",
            skills: ['Minimum experience of 3-6 years in Hospitality/Hotel/Aviation or any other related industry.'],
            emailid: 'Careers@encalm.com'
        }
    ];

    $scope.careerGoa = [{
        id: 1,
        jobcode: 'EH/GOA/0001',
        title: 'ASSOCIATE - FOOD & BEVERAGE',
        department: 'LOUNGE OPERATIONS',
        location: 'GOA',
        totalOpening: 40,
        overview: 'Guest Management, Up-selling of products & services, Handling of Guest Complaints, Efficient & safe delivery of F&B orders',
        qulification: "BHM/BSc in Hospitality/Hotel Management.",
        skills: ['Proficient in English', 'Customer Oriented', 'Positive Attitude', 'Familiarity with Hospitality Industry Standards'],
        emailid: 'Careers.Goa@encalm.com'
    },{
        id: 2,
        jobcode: 'EH/GOA/0002',
        title: 'ASSOCIATE - ATITHYA',
        department: 'ATITHYA',
        location: 'GOA',
        totalOpening: 20,
        overview: 'Welcoming & Assisting the Guests within the Airport, Check-in & Check-out procedures, Handling of Guest Complaints',
        qulification: "BHM/BSc in Hospitality/Hotel Management/Diploma in Travel or Tourism",
        skills: ['Proficient in English', 'Customer Oriented', 'Positive Attitude', 'Familiarity with Hospitality Industry Standards'],
        emailid: 'Careers.Goa@encalm.com'
    },{
        id: 3,
        jobcode: 'EH/GOA/0003',
        title: 'ASSISTANT MANAGER - PURCHASE',
        department: 'SCM',
        location: 'GOA',
        totalOpening: 2,
        overview: 'Handling routine purchase orders(OPEX & CAPEX Items), Inventory Management, Maintaining the supplier database, purchase records, Preparing cost estimates & managing budgets.',
        qulification: "Bachelor’s Degree/Diploma in Supply Chain/Logistics or any other related field.",
        skills: ['Minimum experience of 4-7 years in F&B/Engineering /Project purchase in Hospitality/Hotel/Aviation or any other related industry.'],
        emailid: 'Careers.Goa@encalm.com'
    },{
        id: 4,
        jobcode: 'EH/GOA/0004',
        title: 'EXECUTIVE - IT',
        department: 'IT',
        location: 'GOA',
        totalOpening: 1,
        overview: 'System & Network Administration, VPN network maintenance, Set-up & maintain PC/LAN/ISP network for Office & Operations.',
        qulification: "BCA/BSc IT from any recognised university.",
        skills: ['Minimum experience of 3 years as IT Personnel in Hospitality/Hotel/Aviation or any other related industry.'],
        emailid: 'Careers.Goa@encalm.com'
    },{
        id: 5,
        jobcode: 'EH/GOA/0005',
        title: 'SUPERVISOR - FOOD & BEVERAGE',
        department: 'LOUNGE OPERATIONS',
        location: 'GOA',
        totalOpening: 2,
        overview: 'Guest Management, Up-selling of products & services, Handling of Guest Complaints, Efficient & safe delivery of F&B orders',
        qulification: "BHM/BSc in Hospitality/Hotel Management.",
        skills: ['Minimum experience of 3-5 year in Hospitality/Hotel/Aviation or any other related industry.'],
        emailid: 'Careers.Goa@encalm.com'
    }];

    $scope.careerHyd = [{
        id: 1,
        jobcode: 'EH/HYD/0001',
        title: 'ASSOCIATE - FOOD & BEVERAGE',
        department: 'LOUNGE OPERATIONS',
        location: 'HYD',
        totalOpening: 5,
        overview: 'Guest Management, Up-selling of products & services, Handling of Guest Complaints, Efficient & safe delivery of F&B orders',
        qulification: "BHM/BSc in Hospitality/Hotel Management.",
        skills: ['Proficient in English', 'Customer Oriented', 'Positive Attitude', 'Familiarity with Hospitality Industry Standards'],
        emailid: 'Careers.HYD@encalm.com'
    },{
        id: 2,
        jobcode: 'EH/HYD/0002',
        title: 'EXECUTIVE - IT',
        department: 'IT',
        location: 'HYD',
        totalOpening: 1,
        overview: 'System & Network Administration, VPN network maintenance, Set-up & maintain PC/LAN/ISP network for Office & Operations.',
        qulification: "BCA/BSc IT from any recognised university.",
        skills: ['Minimum experience of 3 years as IT Personnel in Hospitality/Hotel/Aviation or any other related industry.'],
        emailid: 'Careers.HYD@encalm.com'
    }]
    $scope.career = {};
    $scope.setCareer = function (career) {
        $scope.career = career;
    }
})
@extends('layouts.app')

@section('title', 'Weekly Logs')

@section('content')
    <div class="max-w-2xl mx-auto py-10 px-4">
        {{-- Page Header --}}
        <header class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold text-slate-800 mb-2">Weekly Ganaps ✨</h1>
            <p class="text-slate-500 max-w-md mx-auto">
                A collection of my OJT journey at Bicol University, documented through code and memories.
            </p>
        </header>

        <div class="space-y-8">
            <x-log-card 
                week="1" 
                title="Orientation and Document Organization" 
                date="February 23-27, 2026"
                content="From February 23 to 27, 2026, my first few days of OJT were mostly focused on getting familiar with the workplace and organizing student records. On February 23, we started the day with an orientation led by our mentor, Ma’am Jaz, where she explained the possible tasks and responsibilities we would handle. After that, we went to ICTO to register our biometrics for daily attendance. Once everything was set, I began working at the ISPS Office, where I sorted scholarship requirements by organizing students’ folders according to their respective campuses and colleges."
                moreContent="For the following days (February 24 to 27), my main task was continuously sorting and arranging students’ documents into their proper folders to keep everything organized. It was a repetitive task, but it helped me understand how important proper document management is in the office. Aside from that, we were also assigned to create a pubmat related to the official statement of GWA and academic distinction."
                :images="[
                    asset('image/docu/1_1.jpg'),
                    asset('image/docu/1_2.jpg'),
                    asset('image/docu/1_3.jpg'),
                    asset('image/docu/1_4.jpg'),
                    asset('image/docu/1_5.jpg'),
                    asset('image/docu/1_6.jpg'),
                    asset('image/docu/1_7.jpg')
                ]" 
            />

            <x-log-card 
                week="2" 
                title="Assisting Students and Managing Records" 
                date="March 2-6, 2026"
                content="From March 2 to 6, 2026, my tasks continued to focus on organizing student documents while slowly taking on more responsibilities in the office. At the start of the week, I worked on sorting student files and was also assigned to create venue rules. As the days went by, I began assisting students who were submitting their scholarship requirements. I helped receive their documents and checked if all the needed requirements were complete."
                moreContent="On the following days, I continued assisting students, especially those applying for scholarships like TDP. I was also assigned to check the COG and COR of students from BU Polangui who were qualified as honor awardees. These tasks helped me improve my attention to detail and communication skills, especially when dealing directly with students."
                :images="[
                    asset('image/docu/2_1.jpg'),
                    asset('image/docu/2_2.jpg'),
                    asset('image/docu/2_3.jpg'),
                    asset('image/docu/2_4.jpg'),
                    asset('image/docu/2_5.jpg')
                ]" 
            />

            <x-log-card 
                week="3" 
                title="My First Days in the Office" 
                date=" March 9-13, 2026"
                content=""
                moreContent=""
                :images="[
                    asset('image/docu/3_1.jpg'),
                    asset('image/docu/3_2.jpg'),
                    asset('image/docu/3_3.jpg'),
                    asset('image/docu/3_4.jpg'),
                    asset('image/docu/3_5.jpg'),
                    asset('image/docu/3_6.jpg')
                ]"     
            />

            <x-log-card 
                week="4" 
                title="Requirement Checking and Web Design Task" 
                date=" March 16-19, 2026"
                content="From March 16 to 20, 2026, my tasks involved checking different student requirements and working on a design task. On March 16, I reviewed the travel order requirements of several groups, including NSTP-LTS (CBEM) and BSA sections, ensuring their documents were properly organized in their assigned folders. On March 17 and 18, I continued checking requirements for other groups such as NSTP-CWTS, BUIDeaA’s, BTVTED, FSIE Field Experience, and Medicine students for Palarong Medisina, making sure everything was complete and correctly arranged."
                moreContent="On March 19, I had a work-from-home setup where I focused on designing the plan and development for updating the OSAS section of the BU website. This task allowed me to apply my creativity and technical skills, especially in web design."
                :images="[
                    asset('image/docu/4_1.jpg'),
                    asset('image/docu/4_2.jpg'),
                    asset('image/docu/4_3.jpg'),
                    asset('image/docu/4_4.jpg'),
                    asset('image/docu/4_5.jpg')
                ]"     
            />

            <x-log-card 
                week="5" 
                title="My First Days in the Office" 
                date=" March 23-27, 2026"
                content=""
                moreContent=""
                :images="[
                    asset('image/docu/5_1.jpg'),
                    asset('image/docu/5_2.jpg'),
                    asset('image/docu/5_3.jpg'),
                    asset('image/docu/5_4.jpg'),
                    asset('image/docu/5_5.jpg'),
                    asset('image/docu/5_6.jpg')
                ]"     
            />

            <x-log-card 
                week="6" 
                title="Travel Order Validation and System Development" 
                date=" March 30-31, April 1 2026"
                content="From March 30 to April 1, 2026, my tasks focused on checking and validating travel order requirements of different colleges and organizations. On March 30 and 31, I reviewed documents for various activities such as Project PULSE, industrial visits, conferences, practicum programs, NSTP field immersions, and organization events. My role was to make sure that all submitted requirements were complete, correct, and properly organized before approval."
                moreContent="On April 1, I had a work-from-home setup where I worked on a system development task titled “SDS: USDS Transaction Monitoring (Report Generation Color Enhancement).” This allowed me to apply my technical skills, particularly in improving the visual presentation of reports."
                :images="[
                    asset('image/docu/6_1.jpg'),
                    asset('image/docu/6_2.jpg'),
                    asset('image/docu/6_3.jpg'),
                    asset('image/docu/6_4.jpg'),
                    asset('image/docu/6_5.jpg'),
                    asset('image/docu/6_6.jpg'),
                    asset('image/docu/6_7.jpg'),
                    asset('image/docu/6_8.jpg'),
                    asset('image/docu/6_9.jpg'),
                    asset('image/docu/6_10.jpg'),
                    asset('image/docu/6_11.jpg')               
                ]"     
            />

            <x-log-card 
                week="7" 
                title="Financial Reporting and Document Verification" 
                date=" April 6-10 2026"
                content="From April 6 to 10, 2026, my tasks mainly involved checking travel order requirements and working on reports. On April 6 and 8, I reviewed documents for different activities such as NSTP CWTS field immersion, BSBA Marketing Management immersion, HIV awareness programs, BUGC, and PATHFIT IV events. My responsibility was to ensure that all requirements were complete and properly organized before approval."
                moreContent="On April 7, I was assigned to prepare the financial report for the USC activities for Academic Year 2025–2026, which helped me improve my attention to detail and organization skills. On April 10, I worked from home and handled the downloading of COR for BU Polangui TDP Batch 3."
                :images="[
                    asset('image/docu/7_1.jpg'),
                    asset('image/docu/7_2.jpg'),
                    asset('image/docu/7_3.jpg'),
                    asset('image/docu/7_4.jpg'),
                    asset('image/docu/7_5.jpg'),
                    asset('image/docu/7_6.jpg')
                ]"     
            />

            <x-log-card 
                week="8" 
                title="Data Encoding and Meeting Documentation" 
                date=" April 13-17 2026"
                content="From April 13 to 17, 2026, my tasks focused on documentation, verification, and administrative work. On April 13, I created an Excel file for the USC/CSC candidates and attended a meeting for the USC deliberation of requirements. On April 14, I worked on inputting details for the USC Financial Report for A.Y. 2025–2026 into an Excel file, where I carefully checked receipts and disbursements to ensure there were no discrepancies in the summary, particularly for the Liquidation Expenditure Overview for the first semester."
                moreContent="On April 15 and 17, I worked on transcribing the USC/CSC Election Meeting 2026, both in the office and during a work-from-home setup. On April 16, I also continued checking travel order requirements for various events, such as the 60th BIODATA Annual Convention and Scientific Session, the 22nd Executive Convention of Health Code International, and IECEP-BSC ElectroCup 2026. These tasks helped me improve my accuracy, attention to detail, and documentation skills."
                :images="[
                    asset('image/docu/8_1.jpg'),
                    asset('image/docu/8_2.jpg'),
                    asset('image/docu/8_3.jpg'),
                    asset('image/docu/8_4.jpg'),
                    asset('image/docu/8_5.jpg')
                ]"     
            />

            <x-log-card 
                week="9" 
                title="Multi-Tasking: Validation, Content Creation, and System Work" 
                date=" April 20-24 2026"
                content="From April 20 to 24, 2026, my tasks involved checking travel order requirements, working on content creation, and continuing system-related tasks. On April 20 and 23, I reviewed documents for various activities such as PEARL Awards 2026, community engagement programs, field immersions, organizational events, and ceremonies. I also assisted in the continuation of checking requirements for BUCM Community Engagement and supported tasks like student ID reprinting. My role was to ensure that all submitted requirements were complete, accurate, and properly organized."
                moreContent="On April 21 to 22, I worked from home due to a strike. During this time, I created a caption for the USC Election 2026 dry run, prepared a presentation about OJT orientation for BS Food Technology, and worked on the System Development for SDS: USDS Transaction Monitoring (Color Enhancement). On April 24, I continued working from home and focused on further improving the system."
                :images="[
                    asset('image/docu/9_1.jpg'),
                    asset('image/docu/9_2.jpg'),
                    asset('image/docu/9_3.jpg'),
                    asset('image/docu/9_4.jpg'),
                    asset('image/docu/9_5.jpg'),
                    asset('image/docu/9_6.jpg'),
                    asset('image/docu/9_7.jpg'),
                    asset('image/docu/9_8.jpg'),
                    asset('image/docu/9_9.jpg')
                ]"     
            />

            <x-log-card 
                week="10" 
                title="Events Review and Financial Analysis" 
                date=" April 27-30 2026"
                content="From April 27 to 29, 2026, my tasks mainly involved checking travel order requirements and working on financial-related outputs. On April 27, I reviewed and validated documents for various colleges and activities such as NSTP-LTS immersion programs, academic support initiatives, gala events, atmospheric studies programs, and recognition and tribute events. My responsibility was to ensure that all requirements submitted by different groups were complete and properly organized."
                moreContent="On April 28, I continued checking requirements for the BUGC 22nd Recognition Rites 2026. On April 29, I worked on preparing the Financial Summary and Budget Utilization Analysis, which helped me better understand how funds are monitored and evaluated across different activities."
                :images="[
                    asset('image/docu/10_1.jpg'),
                    asset('image/docu/10_2.jpg'),
                    asset('image/docu/10_3.jpg'),
                    asset('image/docu/10_4.jpg'),
                    asset('image/docu/10_5.jpg'),
                    asset('image/docu/10_6.jpg')
                ]"     
            />
        </div>
        
    </div>
@endsection
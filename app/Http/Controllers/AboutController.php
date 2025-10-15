<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showTimelineDetail($slug)
    {
        $timelineData = [
            'undergraduate-student' => [
                'title' => 'Undergraduate Student',
                'period' => '2023 - Present',
                'description' => 'As an undergraduate student at BINUS University, I am currently pursuing my Bachelor\'s degree in Computer Science. This journey has been filled with valuable learning experiences, challenging projects, and opportunities for personal growth. I\'ve been able to deepen my understanding of various programming concepts, algorithms, and software development methodologies while maintaining a strong academic performance.'
            ],
            'mentor' => [
                'title' => 'Mentor',
                'period' => 'Aug 2025 - Present',
                'description' => 'In my role as a mentor, I guide and support junior students in their academic journey. I conduct regular mentoring sessions where we discuss programming concepts, problem-solving strategies, and career development depends on the mentee needs. This experience has helped me develop strong communication skills and the ability to explain complex technical concepts in an accessible way.'
            ],
            'part-time-laboratory-assistant' => [
                'title' => 'Part-time Laboratory Assistant',
                'period' => 'Feb 2025 - Present',
                'description' => 'Working as a part-time laboratory assistant has given me hands-on experience in supporting academic activities. I assist students during lab sessions, help troubleshoot programming issues, and support professors in conducting practical sessions. This role has enhanced my technical expertise and teaching abilities.'
            ],
            'staff-at-kmbd' => [
                'title' => 'Staff at KMBD',
                'period' => 'Feb 2024 - Present',
                'description' => 'As a staff member at KMBD (Keluarga Mahasiswa Buddhis Dhammavaddhana), I contribute to organizing religious and social activities for Buddhist students. My responsibilities include event planning, coordination with other committee members, and ensuring smooth execution of various programs. This experience has helped me develop organizational and teamwork skills while serving the community.'
            ],
            'activist-at-himti' => [
                'title' => 'Activist at HIMTI',
                'period' => 'Feb 2023 - Present',
                'description' => 'Being an activist at HIMTI (Himpunan Mahasiswa Teknik Informatika) has allowed me to actively participate in the informatics student community. I engage in various activities including workshops, seminars, and tech events that enhance both technical and soft skills. This involvement has expanded my network and provided valuable insights into the IT industry.'
            ],
            'activist-at-kmbd' => [
                'title' => 'Activist at KMBD',
                'period' => 'Feb 2023 - Feb 2024',
                'description' => 'During my time as an activist at KMBD, I learned the fundamentals of organizational participation and community service. I actively participated in Buddhist student activities, assisted in organizing events, and developed a deeper understanding of teamwork and leadership in a community setting.'
            ],
            'freshmen' => [
                'title' => 'Freshmen',
                'period' => 'Sep 2023 - Sep 2024',
                'description' => 'My freshman year at BINUS University was a period of adaptation and foundation-building. I focused on adjusting to university life, building strong study habits, and establishing connections with peers and faculty. This foundational year provided me with the essential knowledge and skills that have been crucial for my subsequent academic journey.'
            ]
        ];

        // Check if the slug exists in our data
        if (!array_key_exists($slug, $timelineData)) {
            abort(404, 'Timeline detail not found');
        }

        // Add the slug to the data array so it's available in the view
        $data = $timelineData[$slug];
        $data['slug'] = $slug;

        return view('specific-timeline', $data);
    }
}

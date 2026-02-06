<?php

namespace Database\Seeders;

use App\Models\Dentist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DentistSeeder extends Seeder
{
    private $dentists = [
        ['first_name' => 'Dr. Johan', 'last_name' => 'Joe', 'title' => 'Lead dentist', 'biography' => 'Johan is a compassionate and approachable dentist with 15 years of experience in general dentistry.
He graduated from the prestigious Kings College London in 2012. Since graduating he has undertaken further exhaustive training to enhance his general and cosmetic dental skills. He is qualified in Advanced Operative Aesthetic and Restorative Dentistry (Aspire Dental Academy).
His special area of interest is Cosmetic Dentistry and Teeth Straightening. He regularly carries out smile makeovers on patients of all ages involving straightening, whitening, composite bonding as well as placing veneers and crowns.
He has a gentle and kind nature and he prides himself on building lasting relationships with his patients.', 'order' => 1, 'image_route' => 'team-1.jpg',
        'short_description' => 'With a natural ability to manage anxious patients, Dr. Johan is highly regarded for his empathetic chairside manner and commitment to patient education. He takes the time to explain diagnoses and treatment options in a clear, reassuring way, helping patients feel informed and comfortable throughout their journey.',
        'email' => 'johan.joe@beodental.com'],

        ['first_name' => 'Dr. Emma', 'last_name' => 'Brown', 'title' => 'Endodontics', 'biography' => "Emma has been an endodontic specialist since 2003, having completed her specialist training with distinction from the Eastman Dental Institute
She has limited her practice to endodontics since then.
She is one of the first and few mono-specialist consultants to be appointed in the UK. Her consultant position is at King's College Hospital where she is involved in training qualified dentists to become endodontic specialists
She has previously co-developed and run the Master's program in endodontics at Queen Mary University of London and has lectured widely on all aspects of endodontics, dental trauma and facial pain.", 'order' => 2, 'image_route' => 'team-6.jpg',
        'short_description' => 'I view dentistry as a blend of science, precision, and artistry, and I believe collaboration and continuous learning are key to achieving the highest standards of care. Outside of work, I enjoy sports, travel, and spending time with my dog, Tommy.',
        'additional_description' => 'Dr. Emma keeps up with the latest dental advancements by attending regular courses, ensuring her patients benefit from cutting-edge technology and techniques. Known for her empathetic and positive approach, she strives to make every patient feel comfortable, providing clear communication and compassionate care to help them achieve a confident, radiant smile.',
        'email' => 'emma.brown@beodental.com'],

        ['first_name' => 'Dr. Christopher ', 'last_name' => 'Case', 'title' => 'Senior dentist', 'biography' => "Christopher Case was Chief Dental Officer - England from October 2002 to October 2005.
Dr. Christopher was an NHS consultant in Paediatric Dentistry for over 15 years. He specialises in young children with extensive caries and especially those that require full mouth reconstruction under General Anaesthesia. His focus is upon early childhood caries especially as it impacts upon children from the Middle East. Dr. Christopher sees only a limited number of new patients.
Each year he leads an international senior dental leadership programme which is a partnership between King's College London and Harvard University.
In the past ten years over 200 senior dentists have trained on the SDL programme which aims to improve the dental care for children
In 2005 he was asked, by the UK government, to establish the Global Child Dental Health Taskforce and he continues in this role and in 2008 became the chairman of the charity The Global Child Dental Fund.", 'order' => 3, 'image_route' => 'team-4.jpg',
        'short_description' => 'Christopher is passionate about dentistry and a great believer in the need to build good rapport with both patients and colleagues to help patients have the best possible journey to achieving and maintaining great dental health and we are delighted to have him here at the practice with us.',
        'email' => 'christopher.case@beodental.com'],

        ['first_name' => 'Dr. Smithi', 'last_name' => 'Emily', 'title' => 'Pediatric dentist', 'biography' => "Ms. Emily qualified from the Lebanon University in 2014. She completed a genetic certificate and three years training in Paediatric and Community Dentistry in the same university.
She completed a Diploma in Clinical Dental Sciences at the Eastman Dental Institute, London in 2018. She was awarded a Fellowship in Dental Surgery from the Royal College of Surgeons, England in 2018. She worked in The Paediatric Dental Department at The Eastman Dental Instituteand in The Oral and Maxillofacial Surgery at The Barts and The London Hospital and Homerton Hospital. She held a teaching position at the King's College University in the Paediatric Dental Department. She has teaching experience for both undergraduate and postgraduate students and is a regular examiner at the MJDF and ORE courses at the Royal College of Surgeons of England.", 'order' => 4, 'image_route' => 'team-5.jpg',
        'short_description' => ' Dr. Smithi is dedicated to providing high-quality, patient-centered care, focusing on modern, minimally invasive techniques to achieve optimal dental health and aesthetics.',
        'email' => 'smithi.emily@beodental.com'],

        ['first_name' => 'Dr. Mike', 'last_name' => 'Johnson', 'title' => 'Oral surgeon', 'biography' => 'Mike graduated from Newcastle Dental School in 2009 and spent the 2 following years gaining experience in hospitals and general practice in the fields of Sedation, Paediatric dentistry and Oral and Maxillofacial surgery. He is well known for taking great pride in his work, and has a genuine passion and desire to deliver excellent care for his patients.
Mike enjoys passing on his knowledge: in the past as a Clinical Supervisor at Newcastle Dental Hospital and more recently giving lectures to dentists on a variety of topics such as Wisdom tooth surgery, CBCT technology, Crown Lengthening and Dental Anaesthesia techniques.', 'order' => 5, 'image_route' => 'team-2.jpg',
        'short_description' => 'Dr. Mike is dedicated to his patients and aims to provide ethical and high-quality dentistry within a multi-disciplinary approach',
        'additional_description' => 'In addition to his technical skills, Adrian is known for his kind, gentle and encouraging manner. He is committed to providing pain-free dentistry and ensuring that each of his patients has a positive experience at his practice. He is also fluent in Russian and Romanian, making him accessible to a wide range of patients from different backgrounds.
        If you are looking for a trustworthy and knowledgeable dentist who is dedicated to helping you achieve optimal oral health, look no further than Adrian Colesnic. Contact his practice today to schedule your appointment and start your journey to a beautiful, healthy smile.',
        'email' => 'mike.johnson@beodental.com'],

        ['first_name' => 'Dr. Alison', 'last_name' => 'Banson', 'title' => 'Orthodontist', 'biography' => 'Dr. Banson is the principal dentist at ODL Dental Clinic, where he passionately focuses on orthodontics. He leads a team of highly skilled orthodontic professionals to deliver exceptional patient care. With a focus on collaboration and innovation, he harnesses the expertise of his team alongside the latest technologies to achieve outstanding results in a warm and friendly atmosphere.
With over two decades of experience, Dr. Banson ranked in the top decile of his class. During his training, he gained recognition for his exceptional scientific contributions. He is also currently obtaining his Masters in Dental Law, further enhancing his ability to guide his clinic with both clinical and ethical excellence.', 'order' => 6, 'image_route' => 'team-3.jpg',
        'short_description' => 'Dr. Banson takes time to listen, explain options clearly, and tailor treatment to each individual’s needs, lifestyle, and long-term goals. Patients often comment on how refreshing it is to receive care that feels unhurried, honest, and genuinely supportive.',
        'email' => 'alison.banson@beodental.com'],

        ['first_name' => 'Amelia', 'last_name' => 'Wilson', 'title' => 'Dental assistant', 'biography' => 'Amelia joined the Beodental team in April of 2023 as the dental assistent for our New York clinic. Amelia enjoys interacting and building relationships with our patients. Her priority is to ensure that all of our patients have a wonderful experience.', 'order' => 7, 'image_route' => 'team-7.jpg',
        'short_description' => 'Amelia enjoys all aspects of dentistry. She particularly likes helping patients build their confidence with dental treatment and enjoys working in a relaxed environment to help put patients at ease, in particular anxious patients and children.',
        'email' => 'amelia.wilson@beodental.com'],

        ['first_name' => 'Sophia', 'last_name' => 'Nguyen', 'title' => 'Receptionist', 'biography' => '', 'order' => 8, 'image_route' => 'team-8.jpg',
        'short_description' => 'Sophia handle a variety of administrative support tasks, including answering phones, receiving visitors, preparing meeting and training rooms, sorting and distributing mail, and making travel plans.',
        'email' => 'reception@beodental.com'],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->dentists as $dentist) {
            Dentist::firstOrCreate($dentist);
        }
    }
}

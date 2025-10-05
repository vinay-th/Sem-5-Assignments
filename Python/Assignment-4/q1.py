# 1. Create a Hospital system with Doctor, Patient, and Appointment
# classes. Implement methods to schedule appointments and print a daily
# appointment list.
class Doctor:
    def __init__(self, doc_id, name, specialization):
        self.__doc_id = doc_id
        self.name = name
        self.specialization = specialization
    
    def print_details(self):
        print(f"Dr. {self.name}, {self.specialization}")

class Patient:
    def __init__(self, patient_id, name, age, contact):
        self.__patient_id = patient_id
        self.name = name
        self.age = age
        self.contact = contact

    def print_details(self):
        print(f"{self.name}, Age: {self.age}, Contact: {self.contact}")

class Appointment:
    def __init__(self, doctor, patient, date, time):
        self.doctor = doctor
        self.patient = patient
        self.date = date
        self.time = time
    
    def print_details(self):
        print(f"{self.time} - {self.patient.name} with {self.doctor.name}")

class Hospital_Management:
    def __init__(self):
        self.appointments = []

    def schedule_appointment(self, doctor, patient, date, time):
        appointment = Appointment(doctor, patient, date, time)
        self.appointments.append(appointment)
        print(f"Appointment scheduled for {patient.name} with Dr. {doctor.name} on {date} at {time}")

    def print_daily_appointments(self, date):
        print(f"\n{date}")
        print("----- Todays appointments -----")
        daily_list = [appt for appt in self.appointments if appt.date == date]

        if not daily_list:
            print("No appointments scheduled for this date.")
        else:
            for appt in daily_list:
                print(f"- {appt.time}: {appt.patient.name} with Dr. {appt.doctor.name} ({appt.doctor.specialization})")



doc1 = Doctor(101, "Haresh", "Orthopedic")
doc2 = Doctor(102, "Suresh", "Oncologist")
doc3 = Doctor(103, "Ramesh", "Cardiologist")

pat1 = Patient(201, "Amit", 30, "9876543210")
pat2 = Patient(202, "Sumit", 25, "8765432109")
pat3 = Patient(203, "Rohit", 28, "7654321098")

hospital = Hospital_Management()
hospital.schedule_appointment(doc1, pat1, "2023-10-01", "10:00 AM")
hospital.schedule_appointment(doc2, pat2, "2023-10-01", "11:00 AM")
hospital.schedule_appointment(doc1, pat3, "2023-10-02", "09:30 AM")
hospital.schedule_appointment(doc3, pat1, "2023-10-02", "01:00 PM")

hospital.print_daily_appointments("2023-10-01")
hospital.print_daily_appointments("2023-10-02")
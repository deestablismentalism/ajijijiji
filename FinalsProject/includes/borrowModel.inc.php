<?php

declare(strict_types=1);

function getBorrowData(object $pdo) {

    $query = "SELECT *";
}
function insertBorrowData(object $pdo, $id, string $studId, $borrowQuantity, $timeS, $timeE, $dateBorrowed, $dateReturned ) {
    $query = "INSERT INTO borrowedlog(Student_Id,Item_Id,BorrowQuantity,timeStart,timeEnd,DateBorrowed,DateReturned)
                VALUES (?,? ,? ,? ,? ,?,?);";
    
    $stmt = $pdo->prepare($query);
    return $stmt->execute([$studId, $id,$borrowQuantity,$timeS, $timeE, $dateBorrowed, $dateReturned]);
}
function insertBorrower(object $pdo, string $studId, string $studName, string $sectionCourse) {
    
    $query = "INSERT INTO borrowers(Student_Id,Student_Name,SectionCourse) 
                VALUES(?,?,?);";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([$studId, $studName, $sectionCourse]);            
}
function isBorrowerSaved(object $pdo, $id) {
    $query = "SELECT COUNT(*) FROM studentslist WHERE Student_Id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchColumn() > 0;
}
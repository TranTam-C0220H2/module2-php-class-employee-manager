<?php


class EmployeeManager
{
    protected $fileDataEmployee;

    public function __construct($fileDataEmployee)
    {
        $this->fileDataEmployee = $fileDataEmployee;
    }

    public function setFileDataEmployee($fileDataEmployee)
    {
        $this->fileDataEmployee = $fileDataEmployee;
    }

    public function getFileDataEmployee()
    {
        return $this->fileDataEmployee;
    }

    public function getArrayDataEmployee()
    {
        $dataJson = file_get_contents($this->getFileDataEmployee());
        return json_decode($dataJson);
    }

    public function setJsonDataEmployee($dataArray)
    {
        $dataJson = json_encode($dataArray);
        file_put_contents($this->getFileDataEmployee(), $dataJson);
    }

    public function setDataEmployee($employee)
    {
        $dataEmployee = [
            'avatar' =>$employee->getAvatar(),
            'firstName' => $employee->getFirstName(),
            'lastName' => $employee->getLastName(),
            'birthDay' => $employee->getBirthDay(),
            'address' => $employee->getAddress(),
            'jobPosition' => $employee->getJobPosition(),
            'group' => $employee->getGroup()
        ];
        $dataArray = $this->getArrayDataEmployee();
        array_push($dataArray, $dataEmployee);
        $this->setJsonDataEmployee($dataArray);
    }

    public function deleteEmployee($index)
    {
        $dataArray = $this->getArrayDataEmployee();
        array_splice($dataArray, $index, 1, null);
        $this->setJsonDataEmployee($dataArray);
    }

    public function getElementArrayDataEmployByIndex($index)
    {
        $dataArray = $this->getArrayDataEmployee();
        return $dataArray[$index];
    }

    public function editEmployee($employee, $index)
    {
        $dataEmployee = [
            'avatar' =>$employee->getAvatar(),
            'firstName' => $employee->getFirstName(),
            'lastName' => $employee->getLastName(),
            'birthDay' => $employee->getBirthDay(),
            'address' => $employee->getAddress(),
            'jobPosition' => $employee->getJobPosition(),
            'group' => $employee->getGroup()
        ];
        $dataArray = $this->getArrayDataEmployee();
        $dataArray[$index] = $dataEmployee;
        $this->setJsonDataEmployee($dataArray);
    }

    public function searchValueEmployeeByKeyWord($keyWord)
    {
        $dataArray = $this->getArrayDataEmployee();
        $arrayValueEmployeeByKeyWord = [];
        foreach ($dataArray as $index => $item) {
            if ($index + 1 == $keyWord || $item->firstName == $keyWord || $item->address == $keyWord || $item->lastName == $keyWord || $item->birthDay == $keyWord || $item->jobPosition == $keyWord||$item->group==$keyWord) {
                array_push($arrayValueEmployeeByKeyWord, $dataArray[$index]);
            }
        }
        return $arrayValueEmployeeByKeyWord;
    }

    public function searchIndexEmployeeByKeyWord($keyWord)
    {
        $dataArray = $this->getArrayDataEmployee();
        $arrayIndexEmployeeByKeyWord = [];
        foreach ($dataArray as $index => $item) {
            if ($index + 1 == $keyWord || $item->firstName == $keyWord || $item->address == $keyWord || $item->lastName == $keyWord || $item->birthDay == $keyWord || $item->jobPosition == $keyWord||$item->group==$keyWord) {
                array_push($arrayIndexEmployeeByKeyWord, $index);
            }
        }
        return $arrayIndexEmployeeByKeyWord;
    }
    public function searchValueEmployeeByGroup($group) {
        $dataArray = $this->getArrayDataEmployee();
        $arrayValueEmployeeByGroup = [];
        foreach ($dataArray as $index => $item) {
            if ($item->group == $group) {
                array_push($arrayValueEmployeeByGroup,$dataArray[$index]);
            }
        }
        return $arrayValueEmployeeByGroup;
    }
    public function searchIndexEmployeeByGroup($group) {
        $dataArray = $this->getArrayDataEmployee();
        $arrayIndexEmployeeByGroup = [];
        foreach ($dataArray as $index => $item) {
            if ($item->group == $group) {
                array_push($arrayIndexEmployeeByGroup,$index);
            }
        }
        return $arrayIndexEmployeeByGroup;
    }
}
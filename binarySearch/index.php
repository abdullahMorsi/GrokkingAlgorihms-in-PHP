<?php
$arrayTest = array(1,2,3,4,5,6,7,8,9,10);
// print_r($arrayTest);

function binarySearch($array, $guess){
    $low = 0;
    $high = count($array);
    while($low <= $high){
        $mid = intval(($low + $high)/2);
        if($guess == $array[$mid]){
            return $mid;
        }else if($guess < $array[$mid]){
            $high = $mid-1;
        }else{
            $low = $mid+1;
        }
    }
    return 'null';
}

echo "Your Number is at " . binarySearch($arrayTest, 4) . " Index";


// recursive Binary Search

// A recursive binary search
// function. It returns location
// of x in given array arr[l..r]
// is present, otherwise -1
function binarySearchRecursive($arr, $l, $r, $x)
{
if ($r >= $l)
{
		$mid = ceil($l + ($r - $l) / 2);

		// If the element is present
		// at the middle itself
		if ($arr[$mid] == $x)
			return floor($mid);

		// If element is smaller than
		// mid, then it can only be
		// present in left subarray
		if ($arr[$mid] > $x)
			return binarySearchRecursive($arr, $l,
								$mid - 1, $x);

		// Else the element can only
		// be present in right subarray
		return binarySearchRecursive($arr, $mid + 1,
							$r, $x);
}

// We reach here when element
// is not present in array
return -1;
}

// Driver Code
$arr = array(2, 3, 4, 10, 40);
$n = count($arr);
$x = 10;
$result = binarySearchRecursive($arr, 0, $n - 1, $x);
if(($result == -1))
echo "Element is not present in array";
else
echo "Element is present at index ",
							$result;
